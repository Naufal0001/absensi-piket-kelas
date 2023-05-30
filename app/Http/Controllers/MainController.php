<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Siswa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Dashboard(){
        $data['students'] = Siswa::all()->count();
        return view('home', $data);
    }

    public function Data(){
        $data['students'] = Siswa::all();
        return view('data-siswa', $data);
    }

    public function Shedulles(){
        $data['shedulles'] = Jadwal::all();
        return view('jadwal', $data);
    }

}
