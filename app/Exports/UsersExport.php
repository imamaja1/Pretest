<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Mahasiswa::with('program_studi')->select('nim','nama_mahasiswa')->get();
        return DB::table('mahasiswa')
                    ->leftJoin('program_studi', 'mahasiswa.program_studi_kode', '=', 'program_studi.kode_program_studi')
                    ->select('nim','nama_mahasiswa','nama_program_studi')
                    ->get();
    }
    public function headings(): array
    {
        return ["NIM", "Nama Mahasiswa", "Program Studi"];
    }
}
