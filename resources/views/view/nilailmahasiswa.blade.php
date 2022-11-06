@extends('layout')

@section('title')
    Mahasiswa (Tugas 3)
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="row">
    <div class="col-md-6">
      Nama : {{$mahasiswa->nama_mahasiswa}}
      <br>
      Nim : {{$mahasiswa->nim}}
    </div>
    <div class="col-md-12">
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>Semester</th>
            <th>Nilai</th>
          </tr>
        </thead>
          
          @foreach ($data as $item)
            @foreach ($item->nama as $x)
            @php $no=0 @endphp
              <tr>
                <td>{{ $x->kode_matakuliah }}</td>
                <td>{{ $x->nama_matakuliah }}</td>
                <td>{{ $item->semester }}</td>
                <td>{{ $item->nilai[$no]->status }}</td>
              </tr>
            @php $no++ @endphp
            @endforeach
          @endforeach
        <tbody>
        </tbody>
      </table>
    </div>
  </div>  
  </div>
</div>
@endsection
