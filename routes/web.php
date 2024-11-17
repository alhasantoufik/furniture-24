<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\HomeController as BackendHomeController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use Illuminate\Support\Facades\Route;

//frontend routes
Route::get('/',[HomeController::class,'home'])->name('frontend.home');

//products
Route::get('/product-show',[FrontendProductController::class,'productShow'])->name('product.show');





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