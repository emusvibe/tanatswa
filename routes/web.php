<?php

use App\Models\Receiving;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntranceController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ReceivingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
} );

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout', [MainUserController::class, 'logout'])->name('admin.logout');

//Entrance
Route::get('/entrance/entry-log', [EntranceController::class, 'index'])->name('entry.log');
Route::get('/entrance/create', [EntranceController::class, 'create'])->name('store.entry');
Route::post('/entrance/store', [EntranceController::class, 'store'])->name('entry.store');

//Receiving
Route::get('/receiving/receiving-log', [ReceivingController::class, 'index'])->name('receiving.log');
Route::get('/receiving/create', [ReceivingController::class, 'create'])->name('store.receiving');
Route::post('/receiving/store', [ReceivingController::class, 'store'])->name('receiving.store');

//Products

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/create', [ProductsController::class, 'create'])->name('product.create');
Route::post('/products/store', [ProductsController::class, 'store'])->name('product.store');

//Employees

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees');
Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employee.create');
Route::post('/employees/store', [EmployeesController::class, 'store'])->name('employee.store');

