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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/acc', function () {
    return view('acc');
})->name('acc');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/product', function (){
    return view('product');
})->name('product');

Route::get('/category', function (){
    return view('category');
})->name('category');

Route::get('/cart', function(){
    return view('cart');
})->name('cart');

Route::get('/user', function(){
    return view('user');
})->name('user');

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
Route::get('/sweat', function(){
    return view('sweat');
})->name('sweat');
Route::get('/tee-shirt', function(){
    return view('tee-shirt');
})->name('tee-shirt');
Route::get('/mug', function(){
    return view('mug');
})->name('mug');
Route::get('/inscription', function(){
    return view('inscription');
})->name('inscription');
Route::get('/connexion', function(){
    return view('connexion');
})->name('connexion');
Route::get('/even', function(){
    return view('even');
})->name('even');
Route::get('/accueil', function(){
    return view('accueil');
})->name('accueil');

Route::get('/ml', function(){
    return view('ml');
})->name('ml');

Route::get('/ml', function(){
    return view('ml');
})->name('ml');

Route::get('file', 'FileController@showUploadForm')->name('upload.file');
Route::post('file', 'FileController@storeFile');


