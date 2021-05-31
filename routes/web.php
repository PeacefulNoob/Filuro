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
    return view('site.index');
});
Route::get('charming', function () {
    return view('site.apartment1_detail');
});
Route::get('stylish', function () {
    return view('site.apartment2_detail');
});
Route::get('about', function () {
    return view('site.about');
});
Route::get('experiences', function () {
    return view('site.experiences');
});
Route::get('offers', function () {
    return view('site.offers');
});
Route::get('apartments', function () {
    return view('site.apartments');
});
Route::get('contact', function () {
    return view('site.contact');
});
Route::post('Filuro', [
    'uses' => 'MailSendController@mailsend',
    'as' => 'contact.store'
]);
Route::post('Filuro Contact', [
    'uses' => 'MailSendController@mailsendContact',
    'as' => 'contact.store.main'
]);
