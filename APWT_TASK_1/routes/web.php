<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\teamsController;
use App\Http\Controllers\contactController;
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

Route::get('/',[homeController::class, 'homeView'])->name('home');
Route::get('/about',[aboutController::class, 'aboutView'])->name('about');
Route::get('/products',[productsController::class, 'productList'])->name('products');
Route::get('/teams',[teamsController::class, 'teamsView'])->name('teams');
Route::get('/contact',[contactController::class, 'contactView'])->name('contact');
