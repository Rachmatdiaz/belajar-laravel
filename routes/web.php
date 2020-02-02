<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function(){
   return "Hello World";
});

Route::get('/products', 'ProductController@index');

Route::get('/product/display', 'ProductController@showAll');

Route::post('/product/save', 'ProductController@saveNew');

Route::get("/pintu-masuk", "TestController@pintuMasuk");

Route::get("/products/list", "ProductController@list");

Route::view("/path", "nama.view");

Route::get("show-all-items", "ItemController@showAllItems");

Route::resource("categories", "CategoryController");
