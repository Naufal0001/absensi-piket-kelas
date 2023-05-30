<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\rekap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShedullesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkDate($date){
       
    }
 

    public function index()
    {
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
            default:
                $hari = null;
                break;
        }
        $data['shedulles'] = Jadwal::where("hari", $hari)->first();

        return view("form-absensi", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        DB::transaction(function () use ($requestData) {
            foreach ($requestData['id'] as $index => $itemId) {
                $record = [
                    "id_siswa"   => $itemId,
                    "tanggal"    => date("Y-m-d"),
                    "alasan"     => $requestData['alasan'][$index],
                    "keterangan" => $requestData['keterangan'][$index]
                ];

                rekap::create($record);
            }
        });

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
