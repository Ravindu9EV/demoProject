<?php


use App\Http\Controllers\categories\CategoriesController;

use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\about_us\AboutUsController;
use App\Http\Controllers\contact_us\ContactUsController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\projects\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/contact-us',[ContactUsController::class,'index'])->name('contact');
Route::get('/about-us',[AboutUsController::class,'index'])->name('about_us');
Route::get('/categotries',[CategoriesController::class,'category'])->name('categories');

Route::get('/projects',[ProjectsController::class,'project'])->name('projects');

Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('products/save',[ProductController::class,'store'])->name('products.save');
Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');
Route::get('/products/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::patch('/products/{id}/update',[ProductController::class,'update'])->name('products.update');
Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('products.destroy');
