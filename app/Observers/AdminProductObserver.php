<?php

namespace App\Observers;

use App\Models\Admin\Product;
use Carbon\Carbon;

class AdminProductObserver
{
    public function creating(Product $product){
        $this->setAlias($product);
    }
    public function created(Product $product){
        //
    }
    public function updated(Product $product){
        //
    }
    public function deleted(Product $product){
        //
    }
    public function restored(Product $product){
        //
    }
    public function forceDeleted(Product $product){
        //
    }
    /** Alias new product **/
    public function setAlias(Product $product){
        if(empty($product->alias)){
            $product->alias = \Str::slug($product->title);
            $check = Product::where('alias','=',$product->alias)->exists();
            if($check){
                $product->alias = \Str::slug($product->title) . \Str::random(8);
            }
        }
    }
    /** Set Published Product **/
    public function saving(Product $product){
        $this->setPulishedAt($product);
    }
    /** Set Published Product **/
    public function setPulishedAt(Product $product){
        $needSetPublished = empty($product->updated_at) || !empty($product->updated_at);
        if($needSetPublished){
            $product->updated_at = Carbon::now();
        }
    }
}
