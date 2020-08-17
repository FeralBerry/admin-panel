<?php

namespace App\Http\Controllers\Shop\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProductsCreateRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Repositories\Admin\ProductRepository;
use App\SBlog\Core\BlogApp;
use Illuminate\Http\Request;
use MetaTag;

class ProductController extends AdminBaseController
{
    private $productRepository;
    public function __construct(ProductRepository $productRepository){
        parent::__construct();
        $this->productRepository = $productRepository;
    }

    public function index(){
        $perpage = 10;
        $getAllProducts = $this->productRepository->getAllProducts($perpage);
        $count = $this->productRepository->getCountProducts();
        MetaTag::setTags(['title' => "Список продуктов"]);
        return view('shop.admin.product.index', compact('getAllProducts', 'count'));
    }
    public function create(){
        $item = new Category();
        MetaTag::setTags(['title' => "Создание нового продукта"]);
        return view('shop.admin.product.create', [
            'categories' => Category::with('children')
                                ->where('parent_id', '=', '0')
                                ->get(),
            'delimiter' => '-',
            'item' => $item,
        ]);
    }
    /** Сохранение продуктов **/
    public function store(AdminProductsCreateRequest $request){
        $data = $request->input();
        $product = (new Product())->create($data);
        $id = $product->id;
        $product->status = $request->status ? '1' : '0';
        $product->hit = $request->hit ? '1' : '0';
        $product->category_id = $request->parent_id ?? '0';
        $this->productRepository->getImg($product);
        $save = $product->save();
        if($save) {
            $this->productRepository->editFilter($id, $data);
            $this->productRepository->editRelatedProduct($id, $data);
            $this->productRepository->saveGallery($id, $data);
            return redirect()
                ->route('shop.admin.products.create', [$product->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }
    public function show($id){

    }
    /** Редактирование продукта **/
    public function edit($id){
        $product = $this->productRepository->getInfoProduct($id);
        $id = $product->id;
        BlogApp::get_instance()->getProperty('parent_id', $product->category_id);
        $filter = $this->productRepository->getFiltersProduct($id);
        $related_products = $this->productRepository->getRelatedProducts($id);
        $images = $this->productRepository->getGallery($id);
        MetaTag::setTags(['title' => "Редактирование продукта № $id"]);
        return view('shop.admin.product.edit', compact('product','filter', 'related_products', 'id', 'images'), [
            'categories' => Category::with('children')
                ->where('parent_id', '=', '0')
                ->get(),
            'delimiter' => '-',
            'product' => $product,
        ]);
    }
    /** Обновление базы даных при редактировании **/
    public function update(AdminProductsCreateRequest $request, $id){
        $product = $this->productRepository->getId($id);
        if(empty($product)){
            return back()
                ->withErrors(['msg' => 'Запись = [{$id}] не найдена'])
                ->withInput();
        }
        $data = $request->all();
        $result = $product->update($data);
        $product->status = $request->status ? '1' : '0';
        $product->hit = $request->hit ? '1' : '0';
        $product->category_id = $request->parent_id ?? $product->category_id;
        $this->productRepository->getImg($product);
        $save = $product->save();
        if($result && $save){
            $this->productRepository->editFilter($id, $data);
            $this->productRepository->editRelatedProduct($id, $data);
            $this->productRepository->saveGallery($id, $data);
            return redirect()
                ->route('shop.admin.products.edit', [$product->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранеия'])
                ->withInput();
        }
    }
    public function destroy($id){

    }
    public function related(Request $request){
        $q = isset($request->q) ? htmlspecialchars(trim($request->q)) : '';
        $data['items'] = [];
        $products = $this->productRepository->getProducts($q);
        if($products){
            $i = 0;
            foreach ($products as $id => $title){
                $data['items'][$i]['id'] = $title->id;
                $data['items'][$i]['text'] = $title->title;
                $i++;
            }
        }
        echo json_encode($data);
        die;
    }
    /** Аякс загрузка изображений **/
    public function ajaxImage(Request $request){
        if($request->isMethod('get')){
            return view('shop.admin.product.include.image_single_edit');
        } else {
            $validator = \Validator::make($request->all(),
                    [
                        'file' => 'image|max:5000',
                    ],
                    [
                        'file.image' => 'Файл должен быть картинкой (jpg, jpeg, png, gif, svg)',
                        'file.max' => 'Ошибка максимальный размер изображения 5МБ'
                    ]);
            if($validator->fails()){
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            }
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = 'uploads/single/';
            $filename = uniqid().'_'.time().'.'.$extension;
            $request->file('file')->move($dir,$filename);
            $wmax = BlogApp::get_instance()->getProperty('img_width');
            $hmax = BlogApp::get_instance()->getProperty('img_height');
            $this->productRepository->uploadImg($filename, $wmax, $hmax);
            return $filename;
        }
    }
    /** Delete Single Image **/
    public function deleteImage($filename){
        \File::delete('uploads/single/'.$filename);
    }
    /** AjaxUpload Gallery **/
    public function gallery(Request $request){
        $validator = \Validator::make($request->all(),
            [
                'file' => 'image|max:5000',
            ],
            [
                'file.image' => 'Файл должен быть картинкой (jpg, jpeg, png, gif, svg)',
                'file.max' => 'Ошибка максимальный размер изображения 5МБ'
            ]
        );
        if($validator->fails()){
            return array(
                'fail' => true,
                'errors' => $validator->errors()
            );
        }
        if(isset($_GET['upload'])){
            $wmax = BlogApp::get_instance()->getProperty('gallery_width');
            $hmax = BlogApp::get_instance()->getProperty('gallery_height');
            $name = $_POST['name'];
            $this->productRepository->uploadGallary($name, $wmax, $hmax);
        }
    }
    /** Delete Gallery Image **/
    public function deleteGallery(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        if(!$id || !$src){
            return;
        }
        if(\DB::delete("DELETE FROM galleries WHERE product_id = ? AND img = ?", [$id, $src])){
            @unlink("uploads/gallery/$src");
            exit('1');
        }
        return;
    }
    /** Изменение астатуса продукта на 1 **/
    public function returnStatus($id){
        if($id){
            $st = $this->productRepository->returnStatusOne($id);
            if($st){
                return redirect()
                    ->route('shop.admin.products.index')
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка сохранения'])
                    ->withInput();
            }
        }
    }
    /** Изменение астатуса продукта на 0 **/
    public function deleteStatus($id){
        if($id){
            $st = $this->productRepository->deleteStatusOne($id);
            if($st){
                return redirect()
                    ->route('shop.admin.products.index')
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка сохранения'])
                    ->withInput();
            }
        }
    }
    public function deleteProduct($id){
        if($id){
            $gal= $this->productRepository->daleteImgGalleryFromPath($id);
            $db = $this->productRepository->deleteFromDB($id);
            if($db){
                return redirect()
                    ->route('shop.admin.products.index')
                    ->with(['success' => 'Успешно удалено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка удаления'])
                    ->withInput();
            }
        }
    }
}
