<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' =>'admin'], function(){
    Route::get('/home', [DashboardController::class, 'home'])->name('home');
    Route::get('/productupdate', [DashboardController::class, 'product_update'])->name('product.update');
    Route::get('/products', [ProductController::class, 'product_dashboard'])->name('product.dashboard');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/products{id}', [ProductController::class, 'show'])->name('admin.product.show');

    Route::match(['get', 'post'], '/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
     Route::match(['get', 'post'], '/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    //Route::delete('/products{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');



    Route::get('/ticketpurchase', [TicketController::class, 'purchase'])->name('admin.ticket.purchase');
    Route::post('/ticket', [TicketController::class, 'store'])->name('admin.ticket.store');
    Route::get('/ticket', [TicketController::class, 'ticket_dashboard'])->name('admin.ticket.dashboard');

});
