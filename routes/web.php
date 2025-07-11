<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Registration Routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Password Reset Routes
    Route::get('/forgot-password', [LoginController::class, 'showLinkRequestForm'])->name('password.request');
});

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Product Category Routes
Route::get('/produits/chien', [ProductController::class, 'chien'])->name('products.chien');
Route::get('/produits/chat', [ProductController::class, 'chat'])->name('products.chat');
Route::get('/produits/oiseau', [ProductController::class, 'oiseau'])->name('products.oiseau');

// Service Pages
Route::view('/services/toilettage', 'services-toilettage')->name('services.toilettage');
Route::view('/services/hotellerie', 'services-hotellerie')->name('services.hotellerie');
Route::view('/services/dressage', 'services-dressage')->name('services.dressage');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/admin', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users');
Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [AdminUserController::class, 'store'])->name('admin.users.store');
Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
Route::get('/admin/contact-messages', [AdminUserController::class, 'contactMessages'])->name('admin.contact-messages');

// Admin Product Routes
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.products');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');

// Cart Routes
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update/{productId}', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkoutShow'])->name('checkout.show');
Route::post('/checkout', [CartController::class, 'checkoutProcess'])->name('checkout.process');
Route::get('/order/confirmation/{order}', [CartController::class, 'orderConfirmation'])->name('order.confirmation');

// Admin Orders
Route::get('/admin/orders', [App\Http\Controllers\AdminOrderController::class, 'index'])->name('admin.orders');
Route::get('/admin/orders/{order}', [App\Http\Controllers\AdminOrderController::class, 'show'])->name('admin.orders.show');
Route::get('/admin/dashboard', function() {
    $stats = App\Http\Controllers\AdminOrderController::dashboardStats();
    return view('admin.dashboard', $stats);
})->name('admin.dashboard');