<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\ProfilDokterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/konsul-pengguna', [KonsultasiController::class, 'method'])->name('konsulPengguna');

Route::get('/', [UserController::class, 'index'])->name('welcome');

Route::get('/profil-dokter', [ProfilDokterController::class, 'index'])->name('profilDokter');
Route::get('/konsul-pengguna', [KonsultasiController::class, 'index'])->name('konsulPengguna');
Route::get('/konsul-pengguna/konsul-form', [KonsultasiController::class, 'create'])->name('konsulCreate');

// Route::get('/konsul-pengguna/konsul-form/create', [KonsultasiController::class, 'create']);
// Route::post('/konsul-pengguna/konsul-form/store', [KonsultasiController::class, 'store']);

//route pengguna
Route::get('/pengguna/dashboard', [DashboardController::class, 'index'])->name('pengguna.dashboard');
Route::get('/data/dashboard', [DashboardController::class, 'datakesehatan'])->name('data.dashboard');
Route::get('/statistik/dashboard', [DashboardController::class, 'statistik'])->name('statistik.dashboard');
Route::get('/parameter/dashboard', [DashboardController::class, 'parameter'])->name('parameter.dashboard');


//crud admin
Route::get('/pengguna/dashboard', [UserController::class, 'index'])->name('pengguna.dashboard');
Route::get('/pengguna/show/{id}', [UserController::class, 'show'])->name('pengguna.show');
Route::get('/pengguna/create', [UserController::class, 'create'])->name('pengguna.create');
Route::post('/pengguna/store', [UserController::class, 'store'])->name('pengguna.store');
Route::get('/pengguna/edit/{id}', [UserController::class, 'edit'])->name('pengguna.edit');
Route::put('/pengguna/update/{id}', [UserController::class, 'update'])->name('pengguna.update');
Route::delete('/pengguna/{id}', [UserController::class, 'destroy'])->name('pengguna.destroy');  // Nama route diubah



Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

// Route::get('/dashboard', function () {
//     Route::get('/', [AdminController::class, '']);
// });
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::get('/dashboard/pasien/create', [PasienController::class, 'create']);
// Route::post('/dashboard/pasien/store', [PasienController::class, 'store']);
// Route::get('/dashboard/pasien/show/{id}', [PasienController::class, 'show']);

// Route::get('/dashboard/pasien/edit/{id}', [PasienController::class, 'edit']);
// Route::put('/dashboard/pasien/update/{id}', [PasienController::class, 'update']);
// Route::delete('/dashboard/pasien/destroy/{id}', [PasienController::class, 'destroy']);