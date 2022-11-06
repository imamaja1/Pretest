@extends('layout')

@section('title')
    <div class="row">
      <div class="col-6">
        Mahasiswa (Tugas 3)
      </div>
      <div style="text-align: right" class="col-6">
        <a href="{{route('unduh')}}" class="btn btn-success"> export </a>
      </div>
    </div>
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
          <th>Action</th>
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
          ajax: '{{route("detailmahasiswa")}}',
          columns: [
            { data: 'nim' },
            { data: 'nama_mahasiswa'},
            { data: 'nim' , render : function ( data, type, row, meta ) {
              return type === 'display'  ?
                '<a href="detailmahasiswa/'+data+'">view</a><br>': data;
              }
            },
          ],
      });
  });
  </script>
@endsection


