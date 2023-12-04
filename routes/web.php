<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dentcare;
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
Route::get('/home',function(){
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/services',function(){
    return view('service');
});
Route::get('/price',function(){
    return view('price');
});
Route::get('/team',function(){
    return view('team');
});
Route::get('/testimonial',function(){
    return view('testimonial');
});

Route::get('/contact',function(){
    return view('contact');
});
Route::get('/appointment',function(){
    return view('appointment');
});
Route::get('/login',function(){
    return view('signin');
});
Route::get('/dashboard',function(){
    return view('dashboard');
});
Route::post('/saveLogin',[Dentcare::class,'login']);



