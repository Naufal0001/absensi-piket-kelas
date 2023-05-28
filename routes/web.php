<?php

use App\Http\Controllers\ShedullesController;
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

Route::get('/try', function(){
    return view('CheckDatabase', 
        [
            "Students" => Siswa::all(),
            "Shedulles" => Jadwal::all()
        ]
    );
});



Route::resource('/asd', ShedullesController::class);