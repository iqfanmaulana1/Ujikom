@extends('layout.v_template')
@section('title', 'Guru')
@section('content')
<a href="/guru/add" class="btn btn-primary btn-sm">Add</a>
<table class="table table-bordered">
  <thead>
    <tr>
       <th>No</th>
       <th>NIP</th>
       <th>Nama guru</th>
       <th>Mata Pelajaran</th>
       <th>Alamat</th>
    </tr>
  </thead>
  <tbody>
       <?php $no=1; ?>
    @foreach ($guru as $data)
       <tr>
          <td>{{ $no++ }}</td>
          <td> {{ $data->nip }}</td>
          <td>{{ $data->nama_guru }}</td>
          <td>{{ $data->mapel }}</td>
          <td>{{ $data->alamat }}</td>
          <td>
             <a href="/guru/detail/{{ $data->id_guru }}" class="btn btn-sm btn-success">Detail</a>
             <a href="" class="btn btn-sm btn-warning">Edit</a>
             <a href="" class="btn btn-sm btn-danger">Delete</a>
          </td>
       </tr>

    @endforeach
  
  
  </tbody>
</table>
@endsection