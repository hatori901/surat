<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/artikel', [HomeController::class, 'artikel']);
Route::get('/artikel/post/{id}', [PostsController::class, 'show']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/about', [HomeController::class, 'about']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/daftar_surat', [DashboardController::class,'surat'])->name('surat');
Route::middleware(['auth:sanctum', 'verified'])->get('/daftar_users', [DashboardController::class,'users'])->name('users');
Route::middleware(['auth:sanctum', 'verified'])->get('/daftar_artikel', [DashboardController::class,'artikel'])->name('daftar_artikel');
Route::post('/add',[SuratController::class,'store'])->name('add');
Route::patch('/update/{id}',[SuratController::class,'update'])->name('update');
Route::delete('/delete/{id}',[SuratController::class,'destroy'])->name('delete');
Route::post('/newartikel',[PostsController::class,'store'])->name('new');
Route::patch('/updateartikel/{id}',[PostsController::class,'update'])->name('upd');
Route::delete('/deleteartikel/{id}',[PostsController::class,'destroy'])->name('del');
Route::get('admin/dashboard', [DashboardController::class, 'admin'])->name('admin.home')->middleware('is_admin');