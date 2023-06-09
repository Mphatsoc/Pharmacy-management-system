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
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\DepartmentController;



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
Route::get('/stock', [MedicineController::class, 'displayData'])->name('stock');
Route::view('/stock/{id}/add', ('quantity'))->name('stock.add'); // quantity list should look like this
Route::post('/stock/{id}/add', [InventoryController::class, 'addData'])->name('stock.add'); // important
Route::get('/stock/add/{medicine}', [InventoryController::class, 'displayQuantity'])->name('stock.show'); // you will change this and give it a name of stock.card
Route::get('quantity-list/{id}', [InventoryController::class, 'displayData'])->name('stock.card');
Route::get('cancel/{id}', [InventoryController::class, 'cancelData'])->name('cancel');
Route::get('/report', [NotificationsController::class, 'generate'])->name('report'); // report 



//Stock Controller
Route::get('/show_stock', [StockController::class, 'show'])->name('show_stock');
Route::get('/card', [StockController::class, 'drugs'])->name('card');
Route::post('/inventory', [StockController::class, 'store'])->name('inventory.store');

Route::post('/stock',[MedicineController::class, 'store'])->name('stock');


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



// Route::view('add','quantity');
// Route::post('add/{id}',[InventoryController::class, 'addData']);
Route::get('delete/{id}', [InventoryController::class, 'deleteData'])->name('delete');

//riv route
Route::view('riv','requisition');
Route::post('riv',[RivController::class, 'storeData']);
Route::get('riv-list', [RivController::class, 'showData']);
Route::get('edit/{id}', [RivController::class, 'editData'])->name('edit');
Route::post('edit', [RivController::class, 'update'])->name('edit');
Route::get('remove/{id}', [RivController::class, 'removeData'])->name('remove');





//notifications
Route::get('/report', [NotificationsController::class, 'generate'])->name('report');
Route::get('/notify', [NotificationsController::class, 'decline'])->name('notify');
Route::get('/show_notifications', [NotificationsController::class, 'note'])->name('show_notifications');
// Route::get('/show_notifications', [NotificationsController::class, 'notifications'])->name('show_notifications');
Route::get('/approved/{id}',[NotificationsController::class, 'approved']);
Route::get('/declined/{id}',[NotificationsController::class, 'declined']);



//departments
// Route::post('/update-selected-department', [UserController::class, 'updateSelectedDepartment']);
// Route::get('/fetch-selected-department', [UserController::class, 'fetchSelectedDepartment']);











