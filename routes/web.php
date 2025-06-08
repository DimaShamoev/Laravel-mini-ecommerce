<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Display Pages
Route::get('/', [PageController::class, 'showHomePage'])->name('index');
Route::get('/users', [PageController::class, 'showUserPage'])->name('users');
Route::get('/products', [PageController::class, 'showProductsPage'])->name('products');
Route::get('/category', [PageController::class, 'showCategoryPage'])->name('category');
Route::get('/orders', [PageController::class, 'showOrdersPage'])->name('orders');

// Post data
Route::post('/create/user', [UserController::class, 'createUser'])->name('create_user');
Route::post('/create/product', [ProductController::class, 'createProduct'])->name('create_product');
Route::post('/create/category', [CategoryController::class, 'createCategory'])->name('create_category');

// Delete Data
Route::get('/delete/user/{id}', [UserController::class, 'deleteUser'])->name('delete_user');
Route::get('/delete/product/{id}', [ProductController::class, 'deleteProduct'])->name('delete_product');
Route::get('delete/category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete_category');

// Display Edit Form Pages
Route::get('/edit/user-form/{id}', [UserController::class, 'showUserEditForm'])->name('edit_user_page');
Route::get('/edit/product-form/{id}', [ProductController::class, 'showProductEditForm'])->name('edit_product_page');
Route::get('edit/category-form/{id}', [CategoryController::class, 'showCategoryForm'])->name('edit_category_page');

// Edit Data
Route::post('edit/user/{id}', [UserController::class, 'editUser'])->name('edit_user');
Route::post('edit/product/{id}', [ProductController::class, 'editProduct'])->name('edit_product');
Route::post('edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit_category');