<?php

use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'start'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'start'])->name('home');
//Route::post('/home', [App\Http\Controllers\MycarController::class, 'index'])->name('mycar.mycarphp');
Route::post('/home/index', [App\Http\Controllers\MycarController::class, 'index'])->name('mycar.mycarphp');
Route::get('/home/index', [App\Http\Controllers\MycarController::class, 'index'])->name('mycar.mycarphp');
//Route::get('/mycar', [App\Http\Controllers\MycarController::class, 'index'])->name('home/index');
Route::get('/cars1', [App\Http\Controllers\Cars1Controller::class, 'form'])->name('cars1.form');
Route::post('/cars1', [App\Http\Controllers\Cars1Controller::class, 'save'])->name('cars1.save');
Route::get('/viewcars', [App\Http\Controllers\ViewcarsController::class, 'index'])->name('viewcars.viewcars');
//Route::get('/mycar', [App\Http\Controllers\MycarController::class, 'index1'])->name('mycar.mycarphp');
Route::get('/savedcars', [App\Http\Controllers\SavedcarsController::class, 'index'])->name('savedcars.saved');
Route::get('/savedcars/delete/{_id}', [App\Http\Controllers\SavedcarsController::class, 'delete'])->name('savedcars.delete');
//Route::get('/savedcars/pdf', [App\Http\Controllers\SavedcarsController::class, 'createPDF']);
// Route::get('/home/index', [App\Http\Controllers\CookieController::class, 'setCookie']);
// Route::get('/home/index', [App\Http\Controllers\CookieController::class, 'getCookie']);
// Route::get('/cookie/set', 'CookieController@setCookie');
// Route::get('/cookie/get', 'CookieController@getCookie');



