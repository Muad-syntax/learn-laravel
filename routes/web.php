<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\siswaController;

Route::get('/login', [loginController::class, "login"]);
Route::get('/register', [registerController::class, "register"]);
Route::get('/', [dashboardController::class, "dashboard"]);
Route::get('/kelas', [kelasController::class, "kelas"]);
Route::get('/mapel', [mapelController::class, "mapel"]);
Route::get('/siswa', [siswaController::class, "siswa"]);