<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/',[HomeController::class,'index'])->name('home');
route::get('/login',[HomeController::class,'login'])->name('login');
route::get('/registration',[HomeController::class,'registration'])->name('registration');
route::post('/registerprocess',[HomeController::class,'registrationprocess'])->name('registerprocess');

route::post('/loginprocess',[HomeController::class,'loginprocess'])->name('loginprocess');

route::get('/logout',[HomeController::class,'logout'])->name('logout');
route::get('/myaccount',[HomeController::class,'myaccount'])->name('myaccount');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/bookcreate', [App\Http\Controllers\HomeController::class, 'bookcreate'])->name('bookcreate');
Route::post('/city', [App\Http\Controllers\HomeController::class, 'city'])->name('city');
Route::post('/place', [App\Http\Controllers\HomeController::class, 'place'])->name('place');
Route::post('/eventchange', [App\Http\Controllers\HomeController::class, 'eventchange'])->name('eventchange');

// admin

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/country', [App\Http\Controllers\AdminController::class, 'country'])->name('country');
Route::get('/countrycreate', [App\Http\Controllers\AdminController::class, 'countrycreate'])->name('countrycreate');
Route::post('/countryprocess', [App\Http\Controllers\AdminController::class, 'countryprocess'])->name('countryprocess');
Route::get('/countrydelete{id}', [App\Http\Controllers\AdminController::class, 'countrydelete'])->name('countrydelete');
Route::get('/city', [App\Http\Controllers\AdminController::class, 'city'])->name('city');
Route::get('/citycreate', [App\Http\Controllers\AdminController::class, 'citycreate'])->name('citycreate');
Route::post('/cityprocess', [App\Http\Controllers\AdminController::class, 'cityprocess'])->name('cityprocess');
Route::get('/citydelete{id}', [App\Http\Controllers\AdminController::class, 'citydelete'])->name('citydelete');
Route::get('/place', [App\Http\Controllers\AdminController::class, 'place'])->name('place');
Route::get('/placecreate', [App\Http\Controllers\AdminController::class, 'placecreate'])->name('placecreate');
Route::post('/placeprocess', [App\Http\Controllers\AdminController::class, 'placeprocess'])->name('placeprocess');
Route::get('/placedelete{id}', [App\Http\Controllers\AdminController::class, 'placedelete'])->name('placedelete');
Route::get('/gallery', [App\Http\Controllers\AdminController::class, 'gallery'])->name('gallery');
Route::get('/creategallery', [App\Http\Controllers\AdminController::class, 'creategallery'])->name('creategallery');
Route::post('/uploadmultipleimage', [App\Http\Controllers\AdminController::class, 'uploadmultipleimage'])->name('uploadmultipleimage');
Route::get('/deleteimage', [App\Http\Controllers\AdminController::class, 'deleteimage'])->name('deleteimage');


