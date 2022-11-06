<?php

namespace App\Models;

use App\Models\NilaiKRS;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class KRS extends Model
{
    use HasFactory;
    protected $table = "krs";
    protected $primaryKey = "kode_krs"; 

    public function nilai(){
        return $this->hasMany(NilaiKRS::class,'kode_krs','kode_krs');
    }
    public function nama(){
        return $this->hasManyThrough(MataKuliah::class,NilaiKRS::class,'kode_krs','id_matakuliah','kode_krs','id_matakuliah',
        );
    }
    
}
