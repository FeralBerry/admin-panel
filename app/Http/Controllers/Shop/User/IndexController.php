<?php

namespace App\Http\Controllers\Shop\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Gallery;
use App\Models\Admin\Brand;
use DB;
use MetaTag;

class IndexController extends Controller
{
    public function contact(){
        $title = 'Магазин всякой всячены';
        $breadcrumb = 'Contact';
        $data = [
            'title' => $title,
            'breadcrumb' => $breadcrumb,
        ];
        return view('shop.user.contact', $data);
    }
    public function product(){
        $products = Product::paginate(9);
        $title = 'Магазин всякой всячены';
        $breadcrumb = 'Product';
        $data = [
            'products' => $products,
            'title' => $title,
            'breadcrumb' => $breadcrumb,
        ];
        return view('shop.user.product', $data);
    }
    public function index(){
        $title = 'Магазин всякой всячены';
        $data = [
            'title' => $title,
        ];
        return view('shop.user.home', $data);
    }
    public function single_product($id){
        $product = Product::all();
        $id = $id-1;
        $gallery = Gallery::all()->where('product_id', $id);
        $brand = Brand::all();
        $title = 'Магазин всякой всячены';
        $data = [
            'brand' => $brand,
            'gallery' => $gallery,
            'id' => $id,
            'product' => $product,
            'title' => $title,
        ];
        return view('shop.user.product-single', $data);
    }
}
