@extends('layout.v_template')
@section('title', 'Siswa')
@section('content')

@foreach ($siswa as $data)
NIP : {{ $data['nip'] }} <br>
Nama : {{ $data['nama'] }} <br>
Alamat : {{ $data['alamat'] }} <br>
Hobi : {{ $data['hobi'] }} <br>
<br>
@endforeach
@endsection