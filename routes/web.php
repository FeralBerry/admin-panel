<?php

use Illuminate\Support\Facades\Route;
Route::get('/', ['uses' => 'Shop\User\IndexController@index', 'as' => 'index']);
Route::get('/contact', ['uses' => 'Shop\User\IndexController@contact', 'as' => 'contact']);
Route::get('/product', ['uses' => 'Shop\User\IndexController@product', 'as' => 'product']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('auth');
Route::group(['middleware' => ['status', 'auth']], function(){
    $groupData = [
        'namespace' => 'Shop\Admin',
        'prefix' => 'admin',
    ];
    Route::group($groupData, function(){
        Route::resource('index', 'MainController')
            ->names('shop.admin.index');
        Route::resource('orders', 'OrderController')
            ->names('shop.admin.orders');
        Route::get('/orders/change/{id}', 'OrderController@change')
            ->name('shop.admin.orders.change');
        Route::post('/orders/save/{id}', 'OrderController@save')
            ->name('shop.admin.orders.save');
        Route::get('/orders/forcedestroy/{id}', 'OrderController@forcedestroy')
            ->name('shop.admin.orders.forcedestroy');
        Route::get('/categories/mydel', 'CategoryController@mydel')
            ->name('shop.admin.categories.mydel');
        Route::resource('categories', 'CategoryController')
            ->names('shop.admin.categories');
        Route::resource('users', 'UserController')
            ->names('shop.admin.users');
        Route::get('/products/related', 'ProductController@related');
        Route::match(['GET', 'POST'], '/products/ajax-image-upload', 'ProductController@ajaxImage');
        Route::delete('/products/ajax-remove-image/{filename}', 'ProductController@deleteImage');
        Route::post('/products/gallery', 'ProductController@gallery')
            ->name('shop.admin.products.gallery');
        Route::post('/products/delete-gallery', 'ProductController@deleteGallery')
            ->name('shop.admin.products.deletegallery');
        Route::get('/products/return-status/{id}', 'ProductController@returnStatus')
            ->name('shop.admin.products.returnstatus');
        Route::get('/products/delete-status/{id}', 'ProductController@deleteStatus')
            ->name('shop.admin.products.deletestatus');
        Route::get('/products/delete-product/{id}', 'ProductController@deleteProduct')
            ->name('shop.admin.products.deleteproduct');
        Route::resource('product', 'ProductController')
            ->names('shop.admin.products');
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
Route::get('/user/index', 'Shop\User\MainController@index');
