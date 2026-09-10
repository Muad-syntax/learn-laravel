<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\databaseController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\eskulController;
use App\Http\Controllers\sppController;


Route::get('/login', [loginController::class, "login"]);
Route::get('/register', [registerController::class, "register"]);
Route::get('/', [dashboardController::class, "dashboard"]);
Route::get('/kelas', [kelasController::class, "kelas"]);
Route::get('/mapel', [mapelController::class, "mapel"]);
Route::get('/siswa', [siswaController::class, "siswa"]);
Route::get('/database', [databaseController::class, "index"]);
Route::get('/eskul', [eskulController::class, "eskul"]);
Route::get('/spp', [sppController::class, "spp"]);