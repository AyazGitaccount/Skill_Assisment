<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShortUrlController;
use App\Http\Controllers\ShortUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';



Route::get('/admin/details', function () {
    return view('admin.users_details');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::get('/admin/advertisment', function () {
    return view('admin.advertisment');
})->middleware(['auth:admin', 'verified'])->name('admin.advertisment');

Route::get('/admin/stats', function () {
    return view('admin.statistics');
})->middleware(['auth:admin', 'verified'])->name('admin.stats');

require __DIR__.'/adminauth.php';

Route::middleware(['auth:admin','verified'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'users_details'])->name('admin.dashboard');
    Route::post('/adds', [AdminController::class, 'add_advertisment'])->name('admin.add_advertisment');
    Route::get('/admin/admin_adds', [AddsController::class, 'get_adds'])->name('admin.stats');
    Route::delete('/admin/delete_ad/{id}', [AddsController::class, 'delete_ad'])->name('admin.delete_ad');
});


Route::get('/links', [ShortUserController::class, 'index'])->name('user.links')->middleware('auth');
Route::post('/short', [ShortUrlController::class, 'short'])->name('short');
Route::get('/{code}', [ShortUrlController::class, 'show'])->name('short.show');
Route::delete('/user_delete/{id}', [ShortUserController::class, 'delete'])->name('user.delete');
Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

