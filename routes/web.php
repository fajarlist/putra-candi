<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

Route::middleware(['auth', 'level:admin'])->group(function () {
Route::get('/produk', [App\Http\Controllers\produkC::class, 'index'])->name('produk');
Route::get('/produk/add', [App\Http\Controllers\produkC::class, 'add']);
Route::post('/produk/insert', [App\Http\Controllers\produkC::class, 'insert']);
Route::get('/produk/{id_produk}/edit', [App\Http\Controllers\produkC::class, 'edit']);
Route::post('/produk/update/{id_produk}', [App\Http\Controllers\produkC::class, 'update']);
Route::get('/produk/delete/{id_produk}', [App\Http\Controllers\produkC::class, 'delete']);

Route::get('/alat', [App\Http\Controllers\alatC::class, 'index'])->name('alat');
Route::get('/alat/add', [App\Http\Controllers\alatC::class, 'add']);
Route::post('/alat/insert', [App\Http\Controllers\alatC::class, 'insert']);
Route::get('/alat/{id_alat}/edit', [App\Http\Controllers\alatC::class, 'edit']);
Route::post('/alat/update/{id_alat}', [App\Http\Controllers\alatC::class, 'update']);
Route::get('/alat/delete/{id_alat}', [App\Http\Controllers\alatC::class, 'delete']);

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/contact/add', [App\Http\Controllers\ContactController::class, 'add']);
Route::post('/contact/insert', [App\Http\Controllers\ContactController::class, 'insert']);

// Route::get('/pesanan', [App\Http\Controllers\invoiceC::class, 'indexP'])->name('pesanan');
Route::get('/pesanan', [\App\Http\Controllers\transC::class, 'index'])->name('pesanan');
Route::get('/changeStatus', [\App\Http\Controllers\transC::class, 'changeStatus']);
Route::get('/penghasilan', [\App\Http\Controllers\transC::class, 'indexP'])->name('penghasilan');



}); 
// Route::get('/checkout', [App\Http\Controllers\invoiceC::class, 'index'])->name('checkout');
Route::get('/invoice/{nota}', [App\Http\Controllers\invoiceC::class, 'index'])->name('invoice');
Route::get('/invoice/alat', [App\Http\Controllers\invoiceC::class, 'indexalat'])->name('invoice_alat');
Route::post('/beli/insert', [App\Http\Controllers\beliC::class, 'insert']);



Route::get('/cart', [App\Http\Controllers\cartController::class, 'index'])->name('/cart');
Route::post('/checkout', [App\Http\Controllers\cartController::class, 'nota']);
Route::post('/index/addCart', [App\Http\Controllers\cartController::class, 'insert']);
Route::post('/addQty', [App\Http\Controllers\cartController::class, 'update']);
Route::get('/delete/{id_item}', [App\Http\Controllers\cartController::class, 'delete'])->name('/delete');
Route::post('/nota', [App\Http\Controllers\cartController::class, 'nota']);

Route::get('/', [App\Http\Controllers\indexC::class, 'index'])->name('index');
Route::get('/indexP', [App\Http\Controllers\produkC::class, 'indexP'])->name('indexP');
Route::get('/indexG', [App\Http\Controllers\produkC::class, 'indexG'])->name('indexG');
Route::get('/indexH', [App\Http\Controllers\produkC::class, 'indexH'])->name('indexH');
Route::get('/detail/{id_produk}', [App\Http\Controllers\produkC::class, 'detail'])->name('detail');
Route::get('/detailalat/{id_alat}', [App\Http\Controllers\alatC::class, 'detailalat'])->name('detailalat');


// Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::middleware(['auth', 'user-access:user'])->group(function () {
  
//     
// });
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
//     Route::get('/produk', [HomeController::class, 'index'])->name('produk');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
