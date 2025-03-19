<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal'])->name('principal');

Route::get('/sobre', [PrincipalController::class, 'sobrenos'])->name('sobrenos');
Route::get('/contato', [PrincipalController::class, 'contato'])->name('contato');
Route::get('/servicos', [PrincipalController::class, 'servicos'])->name('servicos');
Route::get('/portifolio', [PrincipalController::class, 'portifolio'])->name('portifolio');

