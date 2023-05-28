<?php

use App\Models\Jadwal;
use App\Models\Siswa;
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
    return view('home');
});

Route::get('/data', function () {
    return view('data-siswa');
});

Route::get('/jadwal-piket', function () {
    return view('jadwal');
});

Route::get('/form-siswa', function () {
    return view('form-siswa');
});

Route::get('/form-absensi', function () {
    return view('form-absensi');
});



Route::get('/try', function(){
    return view('CheckDatabase', 
        [
            "Students" => Siswa::all(),
            "Shedulles" => Jadwal::all()
        ]
    );
});