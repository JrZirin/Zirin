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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/webhosting', 'PagesController@webhosting');
Route::get('/contactUs', 'PagesController@contactUs');
Route::get('/webDevelopmentServices', 'PagesController@webDevelopmentServices');
Route::get('/privacyPolicy', 'PagesController@privacyPolicy');
Route::get('/repair', 'PagesController@repair');
Route::get('/mvp', 'PagesController@mvp');
Route::get('/laraveldev', 'PagesController@laraveldev');
Route::get('/html5', 'PagesController@html5');
Route::get('/termsOfUse', 'PagesController@termsOfUse');
Route::get('/faq', 'PagesController@faq');
Route::get('/reportAbuse', 'PagesController@reportAbuse');
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as' => 'contactus.store', 'uses' => 'ContactUSController@contactUSPost']);
##Route::get('/', function () {
## Mail::to('support@zirinlabs.com')->send(new email);
#return view('pages.email');
#});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
