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
     $value = session('key');

    // Specifying a default value...
    $value = session('key', 'default');

    // Store a piece of data in the session...
 dd(   session(['key' => 'value']));
    
        return view('welcome');

});

Route::get('/offer', 'FrontEndController@offer')->name('offer');

Route::get('/inst', 'FrontEndController@index')->name('inst');

Route::get('/vip-rest', 'FrontEndController@index')->name('website');

Route::match(['GET','POST'],'subcat', 'FrontEndController@subCat')->name('subCat');

Route::get('/contact', 'FrontEndController@contact')->name('website.contact');

Route::post('/contact', 'FrontEndController@send_message')->name('website.contact');



Route::match(['GET','POST'],'ajax-subcat/{id}', 'Controller@ajaxcall');



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::resource('category', 'CategoryController');
    Route::resource('subcategories', 'SubcategoriesController');

    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');
    // setting
    Route::get('setting', 'SettingController@index')->name('setting.index');

    Route::post('setting', 'SettingController@update')->name('setting.update');

    // Contact message
    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::get('/contact/show/{id}', 'ContactController@show')->name('contact.show');
    Route::delete('/contact/delete/{id}', 'ContactController@destroy')->name('contact.destroy');
});
