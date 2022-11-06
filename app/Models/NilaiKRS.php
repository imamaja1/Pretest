<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKRS extends Model
{
    use HasFactory;
    protected $table = "krs_detail";
    protected $primaryKey = "kode_krs_detail";
    
}
