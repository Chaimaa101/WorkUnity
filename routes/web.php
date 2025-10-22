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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/add', [EmployeeController::class,'create'])->name('add');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/details', function () {
    return view('details');
})->name('details');

Route::get('/list', [EmployeeController::class,'index'])->name('list');

