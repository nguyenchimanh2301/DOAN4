<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\NhaCCController;
use App\Http\Controllers\billbanController;
use App\Http\Controllers\billnhapController;
use App\Http\Controllers\cbillbanController;
use App\Http\Controllers\cbillnhapController;
use App\Http\Controllers\PhanhoiController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\SlideControllerr;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnhController;





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('sanphams', SanPhamController::class);
Route::resource('Lsp', CategoriesController::class);
Route::resource('news', NewController::class);
Route::resource('Nhaccs', NhaCCController::class);
Route::resource('billbans', billbanController::class);
Route::resource('billnhaps', billnhapController::class);
Route::resource('cbillnhaps', cbillnhapController::class);
Route::resource('cbillbans', cbillbanController::class);
Route::resource('phanhois', PhanhoiController::class);
Route::resource('khachs', KhachhangController::class);
Route::resource('nhanviens', NhanvienController::class);
Route::resource('Slides', SlideControllerr::class);
Route::resource('Users', UserController::class);
Route::resource('anh', AnhController::class);









