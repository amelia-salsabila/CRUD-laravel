@extends('layout.main')

@section('content')
<h1>Edit Student</h1>
<div class="col-lg-6">
    <form method="post" action="/student/update/{{ $student->id }}">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" required id="nis" name="nis" value="{{old('nis',  $student->nis)}}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" required id="nama" name="nama" value="{{old('nama', $student->nama)}}">
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" name="kelas_id" id="kelas_id">
                @foreach ($grades as $kelas)
                    <option value="{{$kelas->id}}" @if($kelas->id == $student->kelas_id) selected @endif>{{$kelas->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" required id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir', $student->tgl_lahir)}}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" required id="alamat" name="alamat" value="{{old('alamat', $student->alamat)}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
