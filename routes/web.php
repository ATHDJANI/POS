<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/food-berverage', [ProductsController::class, 'FoodBerverage']);
Route::get('/category/beauty-health', [ProductsController::class, 'BeautyHealth']);
Route::get('/category/home-care', [ProductsController::class, 'HomeCare']);
Route::get('/category/baby-kid', [ProductsController::class, 'BabyKid']);
Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);
Route::get('/penjualan', [POSController::class, 'POS']);