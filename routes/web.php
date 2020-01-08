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

// Route::get('/{any}', function(){
//     return view('homevue');
// })->where('any', '.*');

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
//Route::get('index', 'HomeController@category_list')->name('categorys');
// Route::get('/index/{id}', function () {
//     //
// })->name('index.show');


 //Route::view('app', 'categoryController');
 Route::resource('index',  'ProductController');
 Route::resource('product', 'productInfoController');
 Route::resource('categorylist', 'categoryController');
//  Route::get('detail/{id}','ProductController@productInfo');
// Route::get('index',  'ProductController@categoryList');
//Route::get('index',  'ProductController@categoryList');
//Route::resource(  'ProductController');
//Route::get('/index', 'ProductController@categoryList');
//Route::resource('category_list',  'ProductController');

// Route::get('/home', 'HomeController@index')->name('home');
