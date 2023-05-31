<?php

use App\Http\Controllers\AuthentiacationController;
use App\Http\Controllers\MainController;
use App\Models\Siswa;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShedullesController;
use App\Http\Controllers\SiswaController;

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


Route::group(["middleware" => "guest"], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('login');
    Route::post('/login', [AuthentiacationController::class, "Login"]);
});

Route::group(["middleware" => "auth"], function (){
    Route::get('/dashboard', [MainController::class, "Dashboard"])->name('home');
    Route::get('/data', [MainController::class, "Data"]);
    Route::get('/jadwal-piket', [MainController::class, "Shedulles"]);
    Route::resource('/form-absensi', ShedullesController::class);
    Route::resource('/form-siswa', SiswaController::class);
    Route::get('/data/edit/{id}', [SiswaController::class, 'edit']);
    Route::post('/data/edit/{id}', [SiswaController::class, 'update']);
    Route::get('/data/hapus/{id}', [SiswaController::class, 'destroy']);
    Route::get('/logout', [AuthentiacationController::class, 'Logout']);
});



Route::get('/try', function(){
    return view('CheckDatabase', 
        [
            "Students" => Siswa::all(),
            "Shedulles" => Jadwal::all()
        ]
    );
});

