<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;

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


// Basic routes from their respective controllers to their views
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [AboutController::class, 'hello'])->name('about');
Route::get('/user', [UserController::class, 'depo'])->name('user');
Route::get('/card', [StockController::class, 'drugs'])->name('card');
Route::get('/stock', [StockController::class, 'meds'])->name('stock');
Route::post('/inventory', [StockController::class, 'store'])->name('inventory.store');

Route::get('/report', [NotificationsController::class, 'generate'])->name('report');
Route::get('/notifications', [NotificationsController::class, 'accept'])->name('notifications');

require __DIR__.'/auth.php';
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

});


// Breeze routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


