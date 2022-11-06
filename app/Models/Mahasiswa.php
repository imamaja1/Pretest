<?php

namespace App\Models;

use App\Models\Program_study;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswa";
    protected $primaryKey = "nim";

    public function program_studi(){
        return $this->belongsTo(Program_study::class,'program_studi_kode','kode_program_studi');
    }

    public function krs(){
        return $this->hasMany(krs::class,'nim','nim');
    }
    
}


