<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::group(['middleware' => ['guest']], function () {

        Route::get('/', 'MainController@top3')->name('index');

        // категории
        Route::get('/categories', 'MainController@categories')->name('categories');

        // корзина
        Route::get('/basket', 'BasketController@basket')->name('basket');
        // адрес доставки
        Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
        
        Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
        // удаление товара из корзины
        Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
        // оформление 
        Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');

        // категория
        Route::get('/categories/{category}', 'MainController@category')->name('category');
        // карточка товара
        Route::get('/categories/{category}/{product?}', 'MainController@product')->name('product');
        // благодароность за покупку
        Route::get('/thanks', 'MainController@thanks')->name('thanks');
        // оплата и доставка (условия)
        Route::get('/delivery', 'MainController@delivery')->name('delivery');

    });

    Route::resource('admin/orders', 'Admin\OrdersController');
    Route::resource('admin/categories', 'Admin\CategoriesController');
    Route::resource('admin/products', 'Admin\ProductsController');
    Route::resource('admin/order-product', 'Admin\OrderProductController');

});