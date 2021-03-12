<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', 'HomeController@index')->name('home');
Route::resource('contacts', 'ContactController')->only('create', 'index', 'store');
Route::resource('galleries', 'GalleryController')->only('create', 'index', 'store');
Route::resource('tours', 'TourController')->only('create', 'index', 'store');
Route::get('/contacts/page', 'ContactController@frontPageIndex')->name('contactspage.index');
Route::get('/galleries/page', 'GalleryController@frontPageIndex')->name('gallery.index');
Route::get('/tours/page', 'TourController@frontPageIndex')->name('tour.index');
Route::get('/tours/page/{id}', 'TourController@show')->name('tour.show');
Route::resource('orders', 'OrdersController')->only('create', 'index', 'store');


Route::group(
    ['prefix' => 'admin','middleware' => 'auth'],
   

    function () {
        Route::get('/', 'Admin\AdminController@index')->name('admin.index');
        Route::resource('galleries', 'GalleryController');
        Route::resource('tours', 'TourController')->except('show');
        Route::resource('categories', 'TourCategoryController');
        Route::resource('orders', 'OrdersController')->only('create', 'index', 'store');
        Route::resource('contacts', 'ContactController')->only('create', 'index', 'store');
    }
);


Route::get('/user/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('force_to_logout');
