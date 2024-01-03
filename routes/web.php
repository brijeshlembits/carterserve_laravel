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
