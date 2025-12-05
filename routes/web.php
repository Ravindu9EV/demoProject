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

Route::get('/product',[ProductController::class,'index'])->name('product');
Route::post('product/save',[ProductController::class,'store'])->name('product.save');
