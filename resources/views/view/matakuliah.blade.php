@extends('layout')

@section('title')
    Mahasiswa (Tugas 2)
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="table-responsive">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th>Kode Matakuliah</th>
          <th>Nama Matakuliah</th>
          <th>Semester</th>
          <th>Program Studi</th>
        </tr>
      </thead>
      <tbody>
      </tbody>

    </table>
  </div>  
  </div>
</div>
@endsection

@section('js')
  <script>
  $(document).ready( function () {
      $('#myTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{route("matakuliah")}}',
          order: { data: 'semester' }, 
          columns: [
            { data: 'kode_matakuliah' },
            { data: 'nama_matakuliah'},
            { data: 'semester'},
            { data: 'program_studi.nama_program_studi'},
          ]
      });
  });
  </script>
@endsection