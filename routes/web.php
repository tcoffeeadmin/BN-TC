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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user1', 'AdminController@user1')->name('user1');

Route::get('/orders','AdminController@orders')->name('orders');
Route::get('/fooditems','AdminController@fooditems')->name('fooditems');
Route::get('/addfoodpage','AdminController@addfood')->name('addfood');

Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
Route::post('/add_biryani','AdminController@foodadd');
Route::get('/edit_food/{id}','AdminController@food_edit')->name('edit_food');

Route::post('/update_biryani','AdminController@update_biryani');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/delete_food/{id}','AdminController@delete_food')->name('delete_food');;

