<?php
use App\gymregistration;
use App\fee;
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
    return view('main');
});

Route::get('/new', function () {
    return view('new');
});
Route::get('/sha', function () {
    return view('sh');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/shedule', function () {
    return view('shedule');
});
Route::get('/trainer', function () {
    return view('trainer');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/admin1', function () {
    return view('admin1');
});
Route::get('/admin1', function () {
    return view('admin1');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/admininside', function () {
    $res=gymregistration::all();
    return view('admininside',compact('res'));
});
Route::get('/feedetails', function () {
    $res=fee::all();
    return view('feedetails',compact('res'));
});
Route::post('/registerpost','registerController@register');

Route::post('/adminLogin','registerController@login');

Route::post('/alogout','registerController@logout');
Route::post('/feespayment/{id}','registerController@fees');
