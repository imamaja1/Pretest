<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    public function index(){
        if (request()->ajax()) {
            $data = Mahasiswa::selectRaw('*, INSERT(SUBSTRING(nim, 1, 2),1,0,20) as tahun_angkatan')
                                ->with('program_studi')
                                ->orderByDesc('tahun_angkatan')
                                ->get();
            return DataTables::of($data)->make(true);
        }
        return view('view/mahasiswa');
    }
    public function datamahasiswa()
    {
        if (request()->ajax()) {
            $data = Mahasiswa::with('program_studi')
                            ->orderBy('program_studi.kode_program_studi')
                            ->get();
            return DataTables::of($data)->make(true);
        }
        return view('view/datamahasiswa');
    }
    public function matakuliah(){
        if (request()->ajax()) {
            $data = MataKuliah::selectRaw('*, SUBSTRING(kode_matakuliah, 6, 1) as semester')
                                ->with('program_studi')
                                ->orderBy('semester','asc')
                                ->get();
            return DataTables::of($data)->make(true);                  
        }
        return view('view/matakuliah');
    }
    public function detailmahasiswa(){
        if (request()->ajax()) {
            $data = Mahasiswa::all();
            return DataTables::of($data)->make(true);
        }
        return view('view/detailmahasiswa');
    }
    public function detailnilai($nim){
        $data = KRS::with('nilai','nama')->where('nim',$nim)->get();
        $mahasiswa =Mahasiswa::find($nim);
        return view('view/nilailmahasiswa', ['mahasiswa' => $mahasiswa, 'data' => $data]);
    }
    public function unduh(){
        return Excel::download(new UsersExport, 'mahasiswa.xlsx');
    }
}
