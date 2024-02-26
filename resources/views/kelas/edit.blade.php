
@extends('layout.main')

@section('content')
<h1>Edit Class</h1>
<div class="col-lg-6">
    <form method="post" action="/kelas/update/{{ $kelas->id }}">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">ID</label>
            <input type="number" class="form-control" required id="nis" name="nis" value="{{old('nis',  $kelas->nis)}}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" required id="nama" name="nama" value="{{old('nama', $kelas->nama)}}">
        </div> 

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection