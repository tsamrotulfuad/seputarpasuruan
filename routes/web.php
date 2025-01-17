<?php

use App\Models\Site;
use App\Models\Kategori;
use App\Models\SosialMedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/post/{slug}', [HomeController::class, 'show'])->name('post.show');
Route::get('/kontak-kami', [HomeController::class, 'kontak'])->name('home.kontak');
Route::post('/kontak', [HomeController::class, 'kontak_store'])->name('kontak.store');
Route::get('/tentang-kami', [HomeController::class, 'tentang'])->name('home.tentang');

Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'kategori'])->name('kategori');
Route::get('/posts', [PostController::class, 'index'])->name('posts');