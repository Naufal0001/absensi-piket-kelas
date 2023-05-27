<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public function Siswa(){
        return $this->hasMany(Siswa::class, 'id_jadwal');
    }
}
