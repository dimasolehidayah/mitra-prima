<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\ProdukIndex;
use App\Http\Livewire\ProdukCreate;
use App\Http\Livewire\ProdukUpdate;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produk', ProdukIndex::class);
Route::get('/produkCreate', ProdukCreate::class);
Route::get('/produkUpdate/{id}', ProdukUpdate::class);
