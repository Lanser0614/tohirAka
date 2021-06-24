<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [SiteController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Country', [App\Http\Controllers\HomeController::class, 'Country']);
Route::get('/Tour', [App\Http\Controllers\HomeController::class, 'Tour']);
Route::get('/Detail', [App\Http\Controllers\HomeController::class, 'Detail']);
Route::post('/storeCountry', [HomeController::class, 'storeCountry'])->name('storeCountry');
Route::get('/destination/{id}', [SiteController::class, 'show']);
Route::get('showCountry/{id}', [HomeController::class, 'showCountry']);
Route::post('updateCountry', [HomeController::class, 'updateCountry'])->name('updateCountry');
Route::get('destroyCountry/{id}', [HomeController::class, 'destroyCountry']);




Route::post('storeTour', [HomeController::class, 'storeTour'])->name('storeTour');
Route::get('editTour/{id}', [HomeController::class, 'showTour']);
Route::post('updateTour', [HomeController::class, 'updateTour'])->name('update.tour');
Route::get('destroyTour/{id}', [HomeController::class, 'destroyTour']);





Route::get('showTour/{id}', [SiteController::class, 'showTour']);
// Route::get('showMenu\{id}', [SiteController::class, 'showMenu']);
Route::get('/about', [SiteController::class, 'about']);


Route::post('storeDetail', [HomeController::class, 'storeDetail'])->name('storeDetail');
Route::get('showDetail/{id}', [HomeController::class, 'showDetail']);
Route::post('updateDetail', [HomeController::class, 'updateDetail'])->name('updateDetail');
Route::post('callback', [HomeController::class, 'callback'])->name('callback');
Route::get('/contact', [SiteController::class, 'contact']);