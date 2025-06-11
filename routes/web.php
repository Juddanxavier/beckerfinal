<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



