<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\HomeController as BackendHomeController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use Illuminate\Support\Facades\Route;

//frontend routes
Route::get('/',[HomeController::class,'home'])->name('frontend.home');
Route::get('/category-show/{category_id}',[HomeController::class,'showCategory'])->name('show.category');

//customer profile
Route::get('/customer-Profile',[FrontendCustomerController::class,'customerProfile'])->name('customer.profile');
Route::get('/login',[FrontendCustomerController::class,'login'])->name('customer.login');
Route::get('/register',[FrontendCustomerController::class,'registration'])->name('customer.registration');




//products
Route::get('/product-show',[FrontendProductController::class,'productShow'])->name('product.show');
Route::get('/product-by-category',[FrontendProductController::class,'productByCategory'])->name('product.category');





Route::group(['prefix'=> 'admin'], function () {

    Route::get('/login',[AdminController::class,'adminLogin'])->name('login');
    Route::post('/do-login',[AdminController::class,'adminDoLogin'])->name('do.login');
//backend routes
Route::get('/',[BackendHomeController::class,'home'])->name('admin.home');

Route::get('/logOut',[AdminController::class,'adminLogout'])->name('admin.logout');


//category
Route::get('/category-list',[CategoryController::class,'categoryList'])->name('category.list');
Route::get('/category-form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('category.store');

Route::get ('/category/edit/{edit_id}',[CategoryController::class,'editList'])->name('category.edit');
Route::get ('/category/delete/{delete_id}',[CategoryController::class,'deleteList'])->name('category.delete');


//products

Route::get('/product-list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product-form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product-store',[ProductController::class,'productStore'])->name('product.store');







});