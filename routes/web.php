<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::view('/services/spare-parts', 'services.spare-parts');
Route::view('/services/in-house-service', 'services.in-house-service');
Route::view('/services/field-service', 'services.field-service');
Route::view('/services/commissioning', 'services.commissioning');
Route::view('/services/inspection', 'services.inspection');
Route::view('/services/maintenance', 'services.maintenance');
Route::view('/services/repair', 'services.repair');
Route::view('/services/general-overhaul', 'services.general-overhaul');
Route::view('/services/technical-advice', 'services.technical-advice');
Route::view('/services/rental-devices', 'services.rental-devices');
Route::view('/services/replacement', 'services.replacement');
Route::view('/services/service-agreements', 'services.service-agreements');

Route::get('/about', function () {
    $breadcrumbs = [
        ['title' => 'About']
    ];
    return view('about', compact('breadcrumbs'));
})->name('about');

Route::get('/contact', function () {
    $breadcrumbs = [
        ['title' => 'Contact']
    ];
    return view('contact', compact('breadcrumbs'));
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{subcategory:slug}', [ProductController::class, 'bySubcategory'])->name('products.by-subcategory');
Route::get('/products/category/{category:slug}', [ProductController::class, 'byCategory'])->name('products.by-category');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');



