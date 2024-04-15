<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\BlogPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/contact', [BlogPostController::class, 'contactPage'])->name('contact');  
Route::get('/openingstijden', [BlogPostController::class, 'openingstijdenPage']);  
Route::get('/attracties', [AttractiesController::class, 'index'])->name('attracties');
Route::get('/tickets', [\App\Http\Controllers\BestellingenController::class, 'index'])->name('tickets');  
Route::post('/bestellingen/save', [\App\Http\Controllers\BestellingenController::class, 'store'])->name('bestellingen.store');
Route::post('/contact/save', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');