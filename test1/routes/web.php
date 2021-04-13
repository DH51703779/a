<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);



//backend
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::get('/logout',[AdminController::class,'logout']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);



//sanpham
Route::get('/chi-tiet-san-pham/{product_id}',[productController::class,'detail_product']);
Route::get('/productlist',[productController::class,'showproduct']);
Route::post('/search',[productController::class,'showtimkiem']);
//Cart
Route::post('/save_card',[CartController::class,'save_cart']);

Route::get('/cart',[CartController::class,'Show_cart']);
Route::get('/delete_cart/{product_id}',[CartController::class,'delete_cart']);
//login
Route::get('/login',[UserController::class,'show_login']);
Route::post('/user-dashboard',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);
//dangky
Route::get('/dangky',[UserController::class,'show_dangky']);
Route::post('/dangky-dashboard',[UserController::class,'dangky']);

//Category Product
Route::get('/add-category-product',[CategoryProduct::class,'add_category_product']);
Route::post('/save-category-product',[CategoryProduct::class,'save_category_product']);
Route::get('/edit-category-product/{category_product_id}',[CategoryProduct::class,'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}',[CategoryProduct::class,'delete_category_product']);
Route::post('/update-category-product/{category_product_id}',[CategoryProduct::class,'update_category_product']);
Route::get('/all-category-product',[CategoryProduct::class,'all_category_product']);
Route::get('/unactive-category-product/{category_product_id}',[CategoryProduct::class,'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryProduct::class,'active_category_product']);

//Brand Product
Route::get('/add-brand-product',[BrandProduct::class,'add_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}',[BrandProduct::class,'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandProduct::class,'delete_brand_product']);
Route::get('/all-brand-product',[BrandProduct::class,'all_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}',[BrandProduct::class,'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandProduct::class,'active_brand_product']);
Route::post('/save-brand-product',[BrandProduct::class,'save_brand_product']);
Route::post('/update-brand-product/{brand_product_id}',[BrandProduct::class,'update_brand_product']);

//Product
Route::get('/add-product',[productController::class,'add_product']);
Route::get('/edit-product/{product_id}',[productController::class,'edit_product']);
Route::get('/delete-product/{product_id}',[productController::class,'delete_product']);
Route::get('/all-product',[productController::class,'all_product']);
Route::get('/unactive-product/{product_id}',[productController::class,'unactive_product']);
Route::get('/active-product/{product_id}',[productController::class,'active_product']);
Route::post('/save-product',[productController::class,'save_product']);
Route::post('/update-product/{product_id}',[productController::class,'update_product']);
