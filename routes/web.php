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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();


//Showroom
Route::resource('showroom', \App\Http\Controllers\ShowroomController::class);
//Gereserveerde Auto's
Route::resource('rented',\App\Http\Controllers\RentedController::class);
Route::resource('rent',\App\Http\Controllers\RentController::class)->except(
    ['show']
);
//Auto's
Route::resource('cars',App\Http\Controllers\CarController::class);
Route::get('/invoice/user/', [App\Http\Controllers\InvoiceController::class, 'index'])->name('user.invoice');

Route::get('/user/{id}/', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::get('/edit/user/', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/rent/{car_id}', [App\Http\Controllers\RentController::class,'index'])->name( 'rent.index');

//Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::post('/edit/user/', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');


//});


