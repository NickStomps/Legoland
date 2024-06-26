<?php

use App\Http\Controllers\BestellingenController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccommodatieController;
use App\Http\Controllers\AccommodatieDetailController;
use App\Http\Controllers\OrderController;

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

Route::get('/index', [IndexController::class, 'index']);
Route::get('/contact', [IndexController::class, 'contactPage'])->name('contact');  
Route::get('/openingstijden', [IndexController::class, 'openingstijdenPage']);   
Route::get('/tickets', [BestellingenController::class, 'index'])->name('tickets');  
Route::post('/bestellingen/save', [BestellingenController::class, 'store'])->name('bestellingen.store');
Route::post('/contact/save', [ContactController::class, 'store'])->name('contact.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/attracties', [AttractiesController::class, 'index'])->name('attracties');
Route::put('/attracties/{attractie}', [AttractiesController::class, 'update'])->name('attracties.update');
Route::delete('/attracties/{attracties}', [AttractiesController::class, 'destroy'])->name('attracties.delete');
Route::post('/attracties/save', [AttractiesController::class, 'store'])->name('attracties.store');
Route::get('/accommodaties', [AccommodatieController::class, 'index'])->name('accommodaties');
Route::get('/accommodatieDetails/{id}', [AccommodatieDetailController::class, 'index'])->name('accommodatieDetail');

Route::post('/orders',  [OrderController::class, 'store'])->name('orders.store');