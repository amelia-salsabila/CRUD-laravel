@extends('layout.main')

@section('content')
<p>Nama: {{ $nama }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <img src="{{ asset($foto) }}" alt="{{ $foto }}" width="300">
@endsection