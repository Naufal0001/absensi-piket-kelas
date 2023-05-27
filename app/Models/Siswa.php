<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public function Jadwal(){
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    public function Recapt(){
        return $this->hasMany(rekap::class, 'id_siswa');
    }
}
