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

Route::get('/slider', function () {
    return view('test');
});


Route::get('/AddCategory', function () {
    return view('AddCategory');
});

Route::get('/AddBrand', function () {
    return view('AddBrand');
});


Route::get('/AddModel', function () {
    

    return view('AddModel');
});

Route::get('/addproduct', function () {
    

    return view('AddProduct');
});


Route::get('/Main', function () {
    return view('layouts.Main');
});




Route::get('/check', function () {
    return view('check');
});


Route::get('/main/{id}', 'MainController@showProductsWithCategory');


Route::post('/AddCategory','MainController@addcategory');

Route::post('/AddBrand','MainController@addbrand');

Route::post('/addmodel','MainController@addmodel');

Route::get('/show','MainController@show');






Route::get('cart','CartController@index');


Route::get('total',function(){

      return  Cart::total();
});



Route::get('cart/remove/{id}','CartController@removeitem');

Route::get('cart/{id}','CartController@additem');

Route::get('remove',function(){
                 $rowId = '0f6524cc3c576d484150599b3682251c';

                Cart::remove($rowId);
});

Route::get('details/{id}', 'MainController@details')->name('details');
Route::get('ShopingCart',function(){
      
      return view('Shopping_Cart');

});


Route::get('/kash',function(){
      
      return view('master');

});

Route::get('/insert',function(){
      
      return view('insert');

});

// 	return view('message');
// });
Route::get('/getSubCategory/', 'MainController@index');

Route::get('/getmodel/', 'MainController@model');

Route::post('/addproduct','MainController@addproduct');
Route::post('/insert', 'MainController@File');


Route::post('/filter','MainController@filter');

// Route::filter('scan', function()
// {
//     if (Input::get('price') >= 2000)
//     {
//         return Redirect::to('Main');
//     }
// });

// Route::get('/show', 'MainController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/viewtable', 'AdminController@table')->name('viewtable');
Route::get('delete/{id}','AdminController@delete')->name('delete');
Route::get('update/{id}','AdminController@update')->name('update');
Route::post('save/{id}','AdminController@saveUpatedData')->name('saveData');