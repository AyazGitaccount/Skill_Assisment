<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShortUrlController;
use App\Http\Controllers\ShortUserController;
use App\Http\Controllers\AdminController;
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


});

Route::get('/links', [ShortUserController::class, 'index'])->name('user.links')->middleware('auth');
Route::post('/short', [ShortUrlController::class, 'short'])->name('short');
Route::get('/{code}', [ShortUrlController::class, 'show'])->name('short.show');
