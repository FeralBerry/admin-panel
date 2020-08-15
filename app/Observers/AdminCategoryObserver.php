<?php

namespace App\Observers;

use App\Models\Admin\Category;

class AdminCategoryObserver
{
    public function creating(Category $category){
        $this->setAlias($category);
    }
    public function created(Category $category)
    {
        //
    }
    public function updated(Category $category)
    {
        $this->setAlias($category);
    }
    public function deleted(Category $category)
    {
        //
    }
    public function restored(Category $category)
    {
        //
    }
    public function forceDeleted(Category $category)
    {
        //
    }
    public function setAlias(Category $category){
        if(empty($category->alias)){
            $category->alias = \Str::slug($category->title).rand(10,999);
        }
    }
}
