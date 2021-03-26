@extends('layout.v_template')
@section('title', 'User')
@section('content')

@foreach ($user as $data)
NIP : {{ $data['nip'] }} <br>
Nama : {{ $data['nama'] }} <br>
Alamat : {{ $data['alamat'] }} <br>
Hobi : {{ $data['hobi'] }} <br>
<br>
@endforeach
@endsection