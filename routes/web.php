<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//Invoices:

Route::get('/faktury', [\App\Http\Controllers\InvoicesController::class, 'index'])->name('invoices.index');

Route::get('/faktury/dodaj', [\App\Http\Controllers\InvoicesController::class, 'create'])->name('invoices.create');
Route::post('/faktury/zapisz', [\App\Http\Controllers\InvoicesController::class, 'store'])->name('invoices.store');

Route::get('/faktury/edytuj/{id}', [\App\Http\Controllers\InvoicesController::class, 'edit'])->name('invoices.edit');
Route::put('/faktury/zmien/{id}', [\App\Http\Controllers\InvoicesController::class, 'update'])->name('invoices.update');

Route::delete('/faktury/usun/{id}', [\App\Http\Controllers\InvoicesController::class, 'delete'])->name('invoices.delete');

//Customers:
Route::resource('klienci', \App\Http\Controllers\CustomerController::class, ['names' => 'customers']);

