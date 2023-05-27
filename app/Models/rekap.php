<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekap extends Model
{
    use HasFactory;

    public function SiswaRecapt(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
