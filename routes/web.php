<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
use App\Livewire\Admin\Produk\ProdukDetail;
use App\Livewire\Admin\Produk\ProdukList;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', DashboardIndex::class)->name('dashboard.index');
Route::get('/produk', ProdukList::class)->name('produk.list');
Route::get('/produk/{id}/detail', ProdukDetail::class)->name('produk.detail');
