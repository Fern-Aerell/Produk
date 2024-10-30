<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('app');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', [ProdukController::class, 'index'])->middleware(['auth', 'verified'])->name('produks');
Route::get('/product/add', [ProdukController::class, 'index_add'])->middleware(['auth', 'verified'])->name('produk.add.view');
Route::get('/product/edit/{id}', [ProdukController::class, 'index_edit'])->middleware(['auth', 'verified'])->name('produk.edit.view');
Route::post('/product/add', [ProdukController::class, 'add'])->middleware(['auth', 'verified'])->name('produk.add');
Route::post('/product/update', [ProdukController::class, 'update'])->middleware(['auth', 'verified'])->name('produk.update');
Route::delete('/product/delete/{id}', [ProdukController::class, 'delete'])->middleware(['auth', 'verified'])->name('produk.delete');

Route::get('/features', [FeatureController::class, 'index'])->middleware(['auth', 'verified'])->name('features');
Route::get('/feature/add', [FeatureController::class, 'index_add'])->middleware(['auth', 'verified'])->name('feature.add.view');
Route::get('/feature/edit/{id}', [FeatureController::class, 'index_edit'])->middleware(['auth', 'verified'])->name('feature.edit.view');
Route::post('/feature/add', [FeatureController::class, 'add'])->middleware(['auth', 'verified'])->name('feature.add');
Route::post('/feature/update', [FeatureController::class, 'update'])->middleware(['auth', 'verified'])->name('feature.update');
Route::delete('/feature/delete/{id}', [FeatureController::class, 'delete'])->middleware(['auth', 'verified'])->name('feature.delete');

Route::get('/{produk}/{feature}', [AppController::class, 'index_produk_feature'])->name('app.produk.feature');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
