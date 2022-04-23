<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SmartphoneController;

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
Route::put('/edit_ram/{id}', [KriteriaController::class,'update_edit_kriteria_ram'])->middleware('auth');

Route::get('/data_kriteria/edit_processor/{id}', [KriteriaController::class,'view_edit_kriteria_processor'])->middleware('auth');
Route::put('/edit_processor/{id}', [KriteriaController::class,'update_edit_kriteria_processor'])->middleware('auth');

Route::get('/data_kriteria/edit_slot_sim/{id}', [KriteriaController::class,'view_edit_kriteria_slot_sim'])->middleware('auth');
Route::put('/edit_slot_sim/{id}', [KriteriaController::class,'update_edit_kriteria_slot_sim'])->middleware('auth');

Route::get('/data_kriteria/edit_harga/{id}', [KriteriaController::class,'view_edit_kriteria_harga'])->middleware('auth');
Route::put('/edit_harga/{id}', [KriteriaController::class,'update_edit_kriteria_harga'])->middleware('auth');

Route::get('/data_smartphone', [SmartphoneController::class,'index'])->middleware('auth');
Route::get('/data_smartphone/create_smartphone', [SmartphoneController::class,'view_insert_smartphone'])->middleware('auth');
Route::get('/data_smartphone/create_smartphone_with_value', [SmartphoneController::class,'view_insert_smartphone_with_value'])->middleware('auth');
Route::post('/data_smartphone/create_smartphone/process', [SmartphoneController::class,'insert_smartphone'])->middleware('auth');
Route::post('/data_smartphone/create_smartphone_with_value/process', [SmartphoneController::class,'insert_smartphone_with_value'])->middleware('auth');

Route::get('/nilai',[NilaiController::class,'index'])->middleware('auth');
