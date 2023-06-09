<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    
    Route::get('/pacientes', [PacienteController::class, 'index'])->name('paciente.index');
    Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('paciente.create');
    Route::post('/store', [PacienteController::class, 'store'])->name('paciente.store');
    Route::get('/edit/{id_Paciente}', [PacienteController::class, 'edit'])->name('paciente.edit');
    Route::put('/update/{id_Paciente}', [PacienteController::class, 'update'])->name('paciente.update');
    Route::delete('/destroy/{id_Paciente}', [PacienteController::class, 'destroy'])->name('paciente.destroy');
});

require __DIR__.'/auth.php';
