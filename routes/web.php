<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Panel/Home');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/manage-user', function () {
//     return Inertia::render('Panel/Manage-User');
// })->middleware(['auth', 'verified'])->name('manage-user');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-menu/get-all-data', [MenuController::class, 'getAllData']);

Route::get('/list-menu', function () {
    return "Ini adalah halaman yang menampilkan semua menu di Cafe Amandemy..";
});

Route::get('/list-menu/{namaMenu}/{harga}', [MenuController::class, 'getAllData']);

require __DIR__.'/auth.php';
