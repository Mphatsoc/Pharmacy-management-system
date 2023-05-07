<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\RivController;


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

Route::get('/notify', [NotificationsController::class, 'decline'])->name('notify');

Route::get('/departments', function () {
    return view('departments');
});


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


//Routes for stock cards and adding and deleting of data.

Route::view('add','quantity');
Route::post('add',[InventoryController::class, 'addData']);
Route::get('quantity-list', [InventoryController::class, 'displayData']);
Route::get('delete/{id}', [InventoryController::class, 'deleteData'])->name('delete');

//riv route
Route::view('riv','requisition');
Route::post('riv',[RivController::class, 'storeData']);
Route::get('riv-list', [RivController::class, 'showData']);
Route::get('delete/{id}', [RivController::class, 'deleteData'])->name('delete');






