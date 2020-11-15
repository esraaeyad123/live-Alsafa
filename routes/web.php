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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/offer', 'FrontEndController@index')->name('website');


Route::get('/contact', 'FrontEndController@contact')->name('website.contact');

Route::post('/contact', 'FrontEndController@send_message')->name('website.contact');









Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::resource('category', 'CategoryController');

    // setting
    Route::get('setting', 'SettingController@index')->name('setting.index');

    Route::post('setting', 'SettingController@update')->name('setting.update');

    // Contact message
    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::get('/contact/show/{id}', 'ContactController@show')->name('contact.show');
    Route::delete('/contact/delete/{id}', 'ContactController@destroy')->name('contact.destroy');
});
