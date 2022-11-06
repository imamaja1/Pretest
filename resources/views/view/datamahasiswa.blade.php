@extends('layout')

@section('title')
    Mahasiswa (Tugas 1 b)
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="table-responsive">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
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
          ajax: '{{route("mahasiswa")}}',
          columns: [
            { data: 'nim' },
            { data: 'nama_mahasiswa'},
            { data: 'program_studi.nama_program_studi'},
          ]
      });
  });
  </script>
@endsection


