<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

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
            case 'sun':
                $hari = "Minggu";
                break;
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
            case 'sat':
                $hari = "Sabtu";
                break;
            default:
                $hari = false;
                break;
        }
        // dd(Jadwal::where('hari', $hari)->first());
        return view("cobaA");
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
        dd($request->all());
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
