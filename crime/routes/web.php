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



Route::get('/' , [HomeController::class, 'create'])->name('create');
Route::post('report' , [HomeController::class, 'store'])->name('store');
// Define a route for the success page
Route::get('/success', [HomeController::class, 'successPage'])->name('success');
