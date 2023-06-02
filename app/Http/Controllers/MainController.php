<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Siswa;
use App\Models\rekap;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Dashboard(){
        switch (strtolower(date("D"))) {
            case 'mon':
                $hari = "Senin";
                break;
            case 'tue':
                $hari = "Selasa";
                break;
            case 'wed':
                $hari = "Rabu";
                break;
            case 'thu':
                $hari = "Kamis";
                break;
            case 'fri':
                $hari = "Jumat";
                break;
            case'sat':
                $hari = "Sabtu";
                break;
            case'sun':
                $hari = "Minggu";
                break;
            default:
                $hari = null;
                break;
        }
        $data['shedulles'] = Jadwal::where("hari", $hari)->first();
        $data['students'] = Siswa::all()->count();
        $data['hari'] = $hari;
        $data['tidak'] = rekap::where("tanggal", date('Y-m-d'))->where('keterangan', 'Tidak Piket')->count();
        return view('home', $data);
    }

    public function Data(Request $request){
        $data['students'] = Siswa::all();
        if($request->has('keterangan')){
            $data['rekaps'] = rekap::where('tanggal', $request->tanggal != null || "" ? $request->tanggal : date("Y-m-d"))->where('keterangan', $request->keterangan)->get();
        }else{
            $data['rekaps'] = rekap::all();
            
        }
        // dd($data['rekaps']);

        return view('data-siswa', $data);
    }

    public function Shedulles(){
        $data['shedulles'] = Jadwal::all();
        return view('jadwal', $data);
    }

}
