<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\HomeController as BackendHomeController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

//frontend routes
Route::get('/',[HomeController::class,'home'])->name('frontend.home');









//backend routes
Route::get('/home',[BackendHomeController::class,'home'])->name('admin.home');



//category
Route::get('/category-list',[CategoryController::class,'categoryList'])->name('category.list');
Route::get('/category-form',[CategoryController::class,'categoryForm'])->name('category.form');
Route::post('/category-store',[CategoryController::class,'categoryStore'])->name('category.store');

Route::get ('/category/edit/{edit_id}',[CategoryController::class,'editList'])->name('category.edit');
Route::get ('/category/delete/{delete_id}',[CategoryController::class,'deleteList'])->name('category.delete');

