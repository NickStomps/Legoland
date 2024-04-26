<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\BestellingenController;
use \App\Http\Controllers\ContactController;

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

// Auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
 
// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/contact', [BlogPostController::class, 'contactPage'])->name('contact');  
Route::get('/openingstijden', [BlogPostController::class, 'openingstijdenPage']);   
Route::get('/attracties', [AttractiesController::class, 'index'])->name('attracties');
Route::get('/tickets', [BestellingenController::class, 'index'])->name('tickets');  
Route::post('/bestellingen/save', [BestellingenController::class, 'store'])->name('bestellingen.store');
Route::post('/contact/save', [ContactController::class, 'store'])->name('contact.store');