<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SegmentController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('servicos-ambientais', [SegmentController::class, 'financial'])->name('segments.financial');
Route::get('servicos-financeiros', [SegmentController::class, 'financial'])->name('segments.financial');
Route::get('compra-venda-veiculos', [SegmentController::class, 'financial'])->name('segments.financial');
Route::get('seguranca-privada', [SegmentController::class, 'financial'])->name('segments.financial');