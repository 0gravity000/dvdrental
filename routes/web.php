<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/top', 'MainController@index');
Route::get('/film', 'FilmController@index');
Route::get('/rental', 'RentalController@index');
Route::get('/customer', 'CustomerController@index');
Route::get('/payment', 'PaymentController@index');
Route::get('/inventory', 'InventoryController@index');
Route::get('/actor', 'ActorController@index');
Route::get('/actor_film', 'ActorFilmController@index');
Route::get('/category', 'CategoryController@index');
Route::get('/category_film', 'CategoryFilmController@index');
Route::get('/staff', 'StaffController@index');
Route::get('/address', 'AddressController@index');
Route::get('/city', 'CityController@index');
Route::get('/country', 'CountryController@index');
Route::get('/store', 'StoreController@index');
Route::get('/language', 'LanguageController@index');
