<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Cashier\CashierController;
use App\Http\Controllers\Management\MenuController;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Management\TableController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

Route::get('/management', function(){
    return view('management.index');
});

Route::resource('/management/category', CategoryController::class);
Route::resource('/management/menu', MenuController::class);
Route::resource('/management/table', TableController::class);

// Cashier
Route::get('/cashier', [CashierController::class, 'index'])->name('cashier.index');
Route::get('/cashier/getTable', [CashierController::class, 'getTables']);
Route::get('/cashier/getMenuByCategory/{category_id}', [CashierController::class, 'getMenuByCategory']);

Route::post('/cashier/orderFood', [CashierController::class, 'orderFood']);

Route::get('/cashier/getSaleDetailsByTable/{table_id}', [CashierController::class, 'getSaleDetailsByTable']);