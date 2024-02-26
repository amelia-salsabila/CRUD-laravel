@extends('layout.main')

@section('content')
    <h1>Create a New Student</h1>
    <div class="col-lg-6">
        <form method="post" action="/student/add">
            @csrf
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="number" class="form-control" required id="nis" name="nis" value="{{old('nis')}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" required id="nama" name="nama" value="{{old('nama')}}">
            </div>
           
            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas</label>
                {{--<input type="text" class="form-control" required id="kelas"  name="kelas" value="{{old('kelas')}}">--}}
                <select class="form-select" name="kelas_id" id="kelas_id">
                    @foreach ($grades as $kelas)
                        <option name="kelas_id" value="{{$kelas->id}}">{{$kelas->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" required id="tgl_lahir"  name="tgl_lahir" value="{{old('tgl_lahir')}}">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" required id="alamat"  name="alamat" value="{{old('alamat')}}">
            </div>


            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    
@endsection
