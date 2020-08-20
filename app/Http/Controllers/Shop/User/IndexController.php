<?php

namespace App\Http\Controllers\Shop\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Gallery;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use DB;
use MetaTag;

class IndexController extends Controller
{
    public function contact(){
        $title = 'Магазин всякой всячены';
        $header_cat = Category::all()->where('parent_id', '0');
        $category = Category::all();
        $breadcrumb = 'Contact';
        $data = [
            'header_cat' => $header_cat,
            'category' => $category,
            'title' => $title,
            'breadcrumb' => $breadcrumb,
        ];
        return view('shop.user.contact', $data);
    }
    public function product($id){
        $products = Product::where('category_id', $id)->paginate(9);
        $title = 'Магазин всякой всячены';
        $breadcrumb = 'Product';
        $header_cat = Category::all()->where('parent_id', '0');
        $category = Category::all();
        $data = [
            'id' => $id,
            'products' => $products,
            'header_cat' => $header_cat,
            'category' => $category,
            'title' => $title,
            'breadcrumb' => $breadcrumb,
        ];
        return view('shop.user.product', $data);
    }
    public function index(){
        $title = 'Магазин всякой всячены';
        $header_cat = Category::all()->where('parent_id', '0');
        $category = Category::all();
        $data = [
            'header_cat' => $header_cat,
            'category' => $category,
            'title' => $title
        ];
        return view('shop.user.home', $data);
    }
    public function single_product($id){
        $product = Product::all();
        $gallery = Gallery::where('product_id', $id);
        $id = $id-1;
        $brand = Brand::all();
        $title = 'Магазин всякой всячены';
        $breadcrumb = $product[$id]->title;
        $header_cat = Category::where('parent_id', '0');
        $category = Category::all();
        $cat = Category::all()->where('id', $product[$id]->category_id);
        $data = [
            'cat' => $cat,
            'header_cat' => $header_cat,
            'category' => $category,
            'breadcrumb' => $breadcrumb,
            'brand' => $brand,
            'gallery' => $gallery,
            'id' => $id,
            'product' => $product,
            'title' => $title,
        ];
        return view('shop.user.product-single', $data);
    }
}
