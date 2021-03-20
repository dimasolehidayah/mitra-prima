<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\ProdukIndex;
use App\Http\Livewire\ProdukCreate;
use App\Http\Livewire\ProdukUpdate;
use App\Http\Livewire\SliderIndex;
use App\Http\Livewire\SliderCreate;
use App\Http\Livewire\SliderUpdate;
use App\Http\Livewire\KategoriIndex;
use App\Http\Livewire\KategoriCreate;
use App\Http\Livewire\KategoriUpdate;

use App\Http\Livewire\Setting;
use App\Http\Livewire\User;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Index;
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

Route::get('/index', Index::class);

Auth::routes();

Route::get('/dashboard', Dashboard::class)->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Produk
Route::get('/produk', ProdukIndex::class);
Route::get('/produkCreate', ProdukCreate::class);
Route::get('/produkUpdate/{id}', ProdukUpdate::class);

//Slider
Route::get('/slider', SliderIndex::class);
Route::get('/sliderCreate', SliderCreate::class);
Route::get('/sliderUpdate/{id}', SliderUpdate::class);

//Kategori
Route::get('/kategori', KategoriIndex::class);
Route::get('/kategoriCreate', KategoriCreate::class);
Route::get('/kategoriUpdate/{id_kategori}', KategoriUpdate::class);

// Setting
Route::get('/setting', Setting::class);

// User
Route::get('/user', User::class);
