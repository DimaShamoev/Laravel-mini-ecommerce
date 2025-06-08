<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'showHomePage'])->name('index');
Route::get('/users', [PageController::class, 'showUserPage'])->name('users');
Route::get('/products', [PageController::class, 'showProductsPage'])->name('products');
Route::get('/category', [PageController::class, 'showCategoryPage'])->name('category');
Route::get('/orders', [PageController::class, 'showOrdersPage'])->name('orders');

Route::post('/create/user', [UserController::class, 'createUser'])->name('create_user');
Route::post('/create/product', [ProductController::class, 'createProduct'])->name('create_product');
Route::post('/create/category', [CategoryController::class, 'createCategory'])->name('create_category');

Route::get('/delete/user/{id}', [UserController::class, 'deleteUser'])->name('delete_user');
Route::get('/delete/product/{id}', [ProductController::class, 'deleteProduct'])->name('delete_product');
Route::get('delete/category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete_category');