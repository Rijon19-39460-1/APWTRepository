<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regController;
use App\Http\Controllers\contactController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/registration',[regController::class, 'reg'])->name('registration');
Route::post('/registration',[regController::class, 'registrationSubmitted'])->name('registration');
Route::get('/login',[loginController::class, 'login'])->name('login');
Route::post('/login',[loginController::class, 'loginSubmitted'])->name('login');
Route::get('/contact',[contactController::class, 'contact'])->name('contact');
Route::post('/contact',[contactController::class, 'contactSubmitted'])->name('contact');