<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;

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

Route::get('/', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::get('/data_kriteria', [KriteriaController::class,'index'])->middleware('auth');

Route::get('/data_kriteria/edit_penyimpanan/{id}', [KriteriaController::class,'view_edit_kriteria_penyimpanan'])->middleware('auth');
Route::put('/edit_penyimpanan/{id}', [KriteriaController::class,'update_edit_kriteria_penyimpanan'])->middleware('auth');

Route::get('/data_kriteria/edit_ram/{id}', [KriteriaController::class,'view_edit_kriteria_ram'])->middleware('auth');
Route::get('/data_kriteria/edit_processor/{id}', [KriteriaController::class,'view_edit_kriteria_processor'])->middleware('auth');
Route::get('/data_kriteria/edit_slot_sim/{id}', [KriteriaController::class,'view_edit_kriteria_slot_sim'])->middleware('auth');
Route::get('/data_kriteria/edit_harga/{id}', [KriteriaController::class,'view_edit_kriteria_harga'])->middleware('auth');
