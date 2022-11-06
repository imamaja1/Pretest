<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = "matakuliah";
    protected $primaryKey = "id_matakuliah";

    public function program_studi(){
        return $this->belongsTo(Program_study::class, 'kode_program_studi','kode_program_studi');
    }
}
