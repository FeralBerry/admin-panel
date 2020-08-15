<?php
namespace App\Repositories\Admin;

use App\Models\Admin\Product;
use App\Repositories\CoreRepository;
use App\Models\Admin\Product as Model;

class ProductRepository extends CoreRepository
{
    public function __construct(){
        parent::__construct();
    }

    protected function getModelClass(){
        return Model::class;
    }
    public function getLastProducts($perpage){
        $get = $this->startConditions()
            ->orderBy('id', 'desc')
            ->limit($perpage)
            ->paginate($perpage);
        return $get;
    }
    public function getAllProducts($perpage){
        $get_all = $this->startConditions()
            ->join('categories','products.category_id','=','categories.id')
            ->select('products.*','categories.title AS cat')
            ->orderBy(\DB::raw('LENGTH(products.title)','products.title'))
            ->limit($perpage)
            ->paginate($perpage);
        return $get_all;
    }
    public function getCountProducts(){
        $count = $this->startConditions()
            ->count();
        return $count;
    }
    public function getProducts($q){
        $products = \DB::table('products')
            ->select('id', 'title')
            ->where('title', 'LIKE', ["%{$q}%"])
            ->limit(8)
            ->get();
        return $products;
    }
    /** Upload single **/
    public function uploadImg($name, $wmax, $hmax){
        $uploaddir = 'uploads/single/';
        $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $name));
        $uploadfile = $uploaddir . $name;
        \Session::put('single', $name);
        self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);
    }
    /** Upload Gallery AJAX **/
    public function uploadGallary($name, $wmax, $hmax){
        $uploaddir = 'uploads/gallery/';
        $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES[$name]['name']));
        $new_name = md5(time()).".$ext";
        $uploadfile = $uploaddir . $new_name;
        \Session::push('gallery', $new_name);
        if(@move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)){
            self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);
            $res = array('file' => $new_name);
            echo json_encode($res);
        }
    }
    /** Get image for new product **/
    public function getImg(Product $product){
        clearstatcache();
        if(!empty(\Session::get('single'))){
            $name = \Session::get('single');
            $product->img = $name;
            \Session::forget('single');//забыть сессию с одиночным изображением
            return;
        }
        if(empty(\Session::get('single')) && !is_file(WWW.'/uploads/single/' . $product->img)){
            $product->img = null;
        }
        return;
    }
    /** Edit Filter **/
    public function editFilter($id, $data){
        $filter = \DB::table('attribute_products')
            ->where('product_id', $id)
            ->pluck('attr_id')
            ->toArray();
        /** если убрали фильтры **/
        if(empty($data['attrs']) && !empty($filter)){
            \DB::table('attribute_products')
                ->where('product_id', $id)
                ->delete();
            return;
        }
        /** Если добавили фильтры **/
        if(empty($filter) && !empty($data['attrs'])){
            $sql_part = '';
            foreach ($data['attrs'] as $v){
                $sql_part .= "($v, $id),";
            }
            $sql_part = rtrim($sql_part, ',');//обрезаем последнюю запятую
            \DB::insert("INSERT INTO attribute_products (attr_id, product_id) VALUES $sql_part");
            return;
        }
        /** Меняем фильтры **/
        if(!empty($data['attrs'])){
            $result = array_diff($filter, $data['attrs']);
            if($result){
                \DB::table('attribute_products')
                    ->where('product_id', $id)
                    ->delete();
                $sql_part = '';
                foreach ($data['attrs'] as $v){
                    $sql_part = "($v, $id),";
                }
                $sql_part = rtrim($sql_part, ',');//обрезаем последнюю запятую
                \DB::insert("INSERT INTO attribute_products (attr_id, product_id) VALUES $sql_part");
                return;
            }
        }
    }
    /** Связаные товары **/
    public function editRelatedProduct($id, $data){
        $related_product = \DB::table('related_products')
            ->select('related_id')
            ->where('product_id', $id)
            ->pluck('related_id')
            ->toArray();
        /** Убрали связаные товары **/
        if(empty($data['related']) && !empty($related_product)){
            \DB::table('related_products')
                ->where('product_id', $id)
                ->delete();
            return;
        }
        /** Добавили связаные товары **/
        if(empty($related_product) && !empty($data['related'])){
            $sql_part = '';
            foreach ($data['related'] as $v){
                $v = (int)$v;
                $sql_part .= "($id, $v),";
            }
            $sql_part = rtrim($sql_part, ',');//обрезаем последнюю запятую
            /** записывает в ячейки таблицы (product_id, related_id) значения из $sql_part **/
            \DB::insert("INSERT INTO related_products (product_id, related_id) VALUES $sql_part");
            return;
        }
        /** Замена связаные товары **/
        if(!empty($data['related'])){
            /** Нахождение разницы между данными **/
            $result = array_diff($related_product, $data['related']);
            if(!(empty($result)) || count($related_product) != count($data['related'])) {
                /** удаляем содержимое если есть разница **/
                \DB::table('related_products')
                    ->where('products_id', $id)
                    ->delete();
                $sql_part = '';
                foreach ($data['related'] as $v){
                    $sql_part .= "($v, $id),";
                }
                $sql_part = rtrim($sql_part, ',');//обрезаем последнюю запятую
                /** записывает в ячейки таблицы (product_id, related_id) значения из $sql_part **/
                \DB::insert("INSERT INTO related_products (product_id, related_id) VALUES $sql_part");
                return;
            }
        }
    }
    /** Сохранение изображений галлереи **/
    public function saveGallery($id, $data){
        if(!empty(\Session::get('gallery'))){
            $sql_part = '';
            foreach (\Session::get('gallery') as $v){
                $sql_part .= "('$v', $id),";
            }
            $sql_part = rtrim($sql_part, ',');//обрезаем последнюю запятую
            \DB::insert("INSERT INTO galleries (img, product_id) VALUES $sql_part");
            \Session::forget('gallery');//закрыть сессию gallery
        }
    }
    /** Изменение размера изображения по параметрам **/
    public static function resize($target, $dest, $wmax, $hmax, $ext){
        list($w_orig, $h_orig) = getimagesize($target);
        $ratio = $w_orig/$h_orig;
        if(($wmax/$hmax) > $ratio) {
            $wmax = $hmax * $ratio;
        } else {
            $hmax = $wmax / $ratio;
        }
        $img = "";
        switch ($ext){
            case("gif"):
                $img = imagecreatefromgif($target);
                break;
            case("png"):
                $img = imagecreatefrompng($target);
                break;
            default:
                $img = imagecreatefromjpeg($target);
        }
        $newImg = imagecreatetruecolor($wmax, $hmax);
        if($ext == "png"){
            imagesavealpha($newImg, true);
            $transPng = imagecolorlocatealpha($newImg,0,0,0,127);
            imagefill($newImg,0,0,$transPng);
        }
        imagecopyresampled($newImg, $img,0,0,0,0, $wmax, $hmax, $w_orig, $h_orig);//копирует и изменяет размер
        switch ($ext){
            case("gif"):
                imagegif($newImg, $dest);
                break;
            case("png"):
                imagepng($newImg, $dest);
                break;
            default:
                imagejpeg($newImg, $dest);
        }
        imagedestroy($newImg);
    }
    /** Получение всей информации для редактирование продукта **/
    public function getInfoProduct($id){
        $product = $this->startConditions()
            ->find($id);
        return $product;
    }
    /** Получение всех фильтров по ID для редактирования **/
    public function getFiltersProduct($id){
        $filter = \DB::table('attribute_products')
            ->select('attr_id')
            ->where('product_id', $id)
            ->pluck('attr_id')
            ->all();
        return $filter;
    }
    /** получаем связаные товары для редактирования **/
    public function getRelatedProducts($id){
        $related_products = $this->startConditions()
            ->join('related_products', 'products.id', '=', 'related_products.related_id')
            ->select('products.title', 'related_products.related_id')
            ->where('related_products.product_id', $id)
            ->get();
        return $related_products;
    }
    /** Получение всех связаных с редактирумемым продуктом изображений **/
    public function getGallery($id){
        $gallery = \DB::table('galleries')
            ->where('product_id', $id)
            ->pluck('img')
            ->all();
        return $gallery;
    }
    /** Перевод статуса подукта в 1 или On **/
    public function returnStatusOne($id){
        if(isset($id)){
            $st = \DB::update("UPDATE products SET status = '1' WHERE id = ?", [$id]);
            if($st) {
                return true;
            } else {
                return false;
            }
        }
    }
    /** Перевод статуса подукта в 0 или Off **/
    public function deleteStatusOne($id){
        if(isset($id)){
            $st = \DB::update("UPDATE products SET status = '0' WHERE id = ?", [$id]);
            if($st) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function daleteImgGalleryFromPath($id){
        $galleryImg = \DB::table('galleries')
            ->select('img')
            ->where('product_id', $id)
            ->pluck('img')
            ->all();
        $singleImg = \DB::table('products')
            ->select('img')
            ->where('id', $id)
            ->pluck('img')
            ->all();
        if(!empty($galleryImg)){
            foreach ($galleryImg as $img){
                @unlink("uploads/gallery/$img");
            }
        }
        if(!empty($singleImg)){
            @unlink("uploads/single/". $singleImg[0]);
        }
    }
    public function deleteFromDB($id){
        if(isset($id)){
            $related_product = \DB::delete("DELETE FROM related_products WHERE product_id = ?", [$id]);
            $att_prod = \DB::delete("DELETE FROM attribute_products WHERE product_id = ?", [$id]);
            $gallery = \DB::delete("DELETE FROM galleries WHERE product_id = ?", [$id]);
            $product = \DB::delete("DELETE FROM products WHERE id = ?", [$id]);
            if($product){
                return true;
            }
        }
    }
}
