<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
})->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('auth');
Route::group(['middleware' => ['status', 'auth']], function(){
    $groupData = [
        'namespace' => 'Blog\Admin',
        'prefix' => 'admin',
    ];
    Route::group($groupData, function(){
        Route::resource('index', 'MainController')
            ->names('blog.admin.index');
        Route::resource('orders', 'OrderController')
            ->names('blog.admin.orders');
        Route::get('/orders/change/{id}', 'OrderController@change')
            ->name('blog.admin.orders.change');
        Route::post('/orders/save/{id}', 'OrderController@save')
            ->name('blog.admin.orders.save');
        Route::get('/orders/forcedestroy/{id}', 'OrderController@forcedestroy')
            ->name('blog.admin.orders.forcedestroy');
        Route::get('/categories/mydel', 'CategoryController@mydel')
            ->name('blog.admin.categories.mydel');
        Route::resource('categories', 'CategoryController')
            ->names('blog.admin.categories');
        Route::resource('users', 'UserController')
            ->names('blog.admin.users');
        Route::get('/products/related', 'ProductController@related');
        Route::match(['GET', 'POST'], '/products/ajax-image-upload', 'ProductController@ajaxImage');
        Route::delete('/products/ajax-remove-image/{filename}', 'ProductController@deleteImage');
        Route::post('/products/gallery', 'ProductController@gallery')
            ->name('blog.admin.products.gallery');
        Route::post('/products/delete-gallery', 'ProductController@deleteGallery')
            ->name('blog.admin.products.deletegallery');
        Route::get('/products/return-status/{id}', 'ProductController@returnStatus')
            ->name('blog.admin.products.returnstatus');
        Route::get('/products/delete-status/{id}', 'ProductController@deleteStatus')
            ->name('blog.admin.products.deletestatus');
        Route::get('/products/delete-product/{id}', 'ProductController@deleteProduct')
            ->name('blog.admin.products.deleteproduct');
        Route::resource('product', 'ProductController')
            ->names('blog.admin.products');
        Route::get('/filter/group-filter', 'FilterController@attributeGroup');
        Route::match(['GET', 'POST'], '/filter/group-add-group', 'FilterController@groupAdd');
        Route::match(['GET', 'POST'], '/filter/group-edit/{id}', 'FilterController@groupEdit');
        Route::get('/filter/group-delete/{id}', 'FilterController@groupDelete');
        Route::get('/filter/attributes-filter', 'FilterController@attributeFilter');
        Route::match(['GET', 'POST'], '/filter/attrs-add', 'FilterController@attributeAdd');
        Route::match(['GET', 'POST'], '/filter/attr-edit/{id}', 'FilterController@attrEdit');
        Route::get('/filter/attr-delete/{id}', 'FilterController@attrDelete');
        Route::get('/currency/index', 'CurrencyController@index');
        Route::match(['GET', 'POST'], '/currency/add', 'CurrencyController@add');
        Route::match(['GET', 'POST'], '/currency/edit/{id}', 'CurrencyController@edit');
        Route::get('/currency/delete/{id}', 'CurrencyController@delete');
        Route::get('/search/result', 'SearchController@index');
        Route::get('/autocomplete', 'SearchController@search');

    });
});
Route::get('/user/index', 'Blog\User\MainController@index');
