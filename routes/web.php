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
Route::get('/usersview', [App\Http\Controllers\UserController::class, 'index'])->name('usersview');
Route::get('/usersview/delete/{_id}', [App\Http\Controllers\UserController::class, 'delete'])->name('usersview.delete');
Route::get('/edituser/form/{_id?}', [App\Http\Controllers\EditUserController::class, 'form'])->name('edituser.form');
Route::put('/edituser/update/{_id}', [App\Http\Controllers\EditUserController::class, 'update'])->name('edituser.update');
Route::post('/home/index', [App\Http\Controllers\MycarController::class, 'index'])->name('mycar.mycarphp');
Route::get('/home/index', [App\Http\Controllers\MycarController::class, 'index'])->name('savedcar.saved');
Route::get('/cars1', [App\Http\Controllers\Cars1Controller::class, 'form'])->name('cars1.form');
Route::post('/cars1', [App\Http\Controllers\Cars1Controller::class, 'save'])->name('cars1.save');
Route::get('/viewcars', [App\Http\Controllers\ViewcarsController::class, 'index'])->name('viewcars.viewcars');
Route::get('/savedcars', [App\Http\Controllers\SavedcarsController::class, 'index'])->name('savedcars.saved');
Route::get('/savedcars/delete/{_id}', [App\Http\Controllers\SavedcarsController::class, 'delete'])->name('savedcars.delete');
Route::get('/viewcars/viewcars', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('/deletecar/choosedelete', [App\Http\Controllers\DeleteCarController::class, 'carsToDelete'])->name('deletecar.carsToDelete');
Route::get('/deletecar/remove/{_id}', [App\Http\Controllers\DeleteCarController::class, 'remove'])->name('deletecar.remove');
Route::get('/deletecar/searchToDelete', [App\Http\Controllers\SearchController::class, 'searchToDelete'])->name('deletecar.searchToDelete');



