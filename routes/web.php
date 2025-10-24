<?php

use App\Http\Controllers\EmployeeController;
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



Route::redirect('/', 'employees')->name('home');
Route::resource('employees', EmployeeController::class,);


Route::get('/update', function () {
    return view('update');
})->name('update');


Route::get('/details', function () {
    return view('details');
})->name('details');


