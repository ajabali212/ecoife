<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CareerController;
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
Route::group(['prefix' => '{locale}'], function() {
// Route::get('/', function () {
//     return view('welcome');
//     })->middleware('setLocale');   
Route::get('/',[HomeController::class,'index'])->middleware('setLocale');
});


 

//Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutUsController::class,'index'])->name('about');
Route::get('/services',[ServicesController::class,'index'])->name('services');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/about2',[AboutUsController::class,'about2'])->name('about2');


