<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\NhaCCController;
use App\Http\Controllers\billbanController;
use App\Http\Controllers\billnhapController;
use App\Http\Controllers\cbillbanController;
use App\Http\Controllers\cbillnhapController;
use App\Http\Controllers\PhanhoiController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\SlideControllerr;
use App\Http\Controllers\AnhController;




Route::get('/', function () {
    return view('Home.index');
});
Route::get('/detail/{id}', function () {
    return view('Detail/detail');
});
Route::get('/Detail_product/{id}', function () {
    return view('Detail/Product_detail');
});
Route::get('/Cart', function () {
    return view('Home/Cart');
});
Route::get('/Admin/index', function () {
    return view('Admin/index');
});
Route::get('/Admin/product', function () {
    return view('Admin/product');
});
Route::get('/Admin/category', function () {
    return view('Admin/Categories');
});
Route::get('/Admin/news', function () {
    return view('Admin/New');
});
Route::get('/Admin/nhap', function () {
    return view('Admin/Nhap');
});
Route::get('/Admin/ban', function () {
    return view('Admin/Ban');
});
Route::get('/Admin/chitietban', function () {
    return view('Admin/cban');
});
Route::get('/Admin/chitietnhap', function () {
    return view('Admin/cnhap');
});
Route::get('/Admin/phanhoi', function () {
    return view('Admin/Phanhoi');
});
Route::get('/Admin/khach', function () {
    return view('Admin/Khachhang');
});
Route::get('/Admin/nhacc', function () {
    return view('Admin/NhaCC');
});
Route::get('/Admin/nhanvien', function () {
    return view('Admin/nhanvien');
});

Route::get('/Admin/slide', function () {
    return view('Admin/Slide');
});
Route::get('/Admin/user', function () {
    return view('Admin/Users');
});
Route::get('/all_product', function () {
    return view('Home/products');
});
Route::get('/list_product/{id}', function () {
    return view('Home/products');
});

Route::get('/sanpham',[SanPhamController::class,'Get']);
Route::get('/sanpham/{id}',[SanPhamController::class,'show']);
Route::post('/sanpham/update/{id}',[SanPhamController::class,'update']);
Route::get('/Detail_product/{id}',[SanPhamController::class,'detail']);
Route::get('/lsp',[CategoriesController::class,'getall']);
Route::get('/lsp/{id}',[CategoriesController::class,'show']);
Route::post('/lsp/update/{id}',[CategoriesController::class,'update']);
Route::get('/billban',[billbanController::class,'Get']);
Route::get('/billnhap',[billnhapController::class,'Get']);
Route::get('/cban',[cbillbanController::class,'Get']);
Route::get('/cnhap',[cbillnhapController::class,'Get']);
Route::get('/phanhois',[PhanhoiController::class,'Get']);
Route::get('/khachs',[KhachhangController::class,'Get']);
Route::get('/nhanvienn',[NhanvienController::class,'Get']);
Route::get('/nhaccss',[NhaCCController::class,'getall']);
Route::get('/users',[UserController::class,'get']);
Route::get('/slides',[SlideControllerr::class,'get']);


Route::get('/lsp/{id}',[CategoriesController::class,'show']);



