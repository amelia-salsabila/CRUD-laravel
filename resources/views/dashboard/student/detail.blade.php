@extends('layout.main')

@section('content')
<h2>Student Detail</h2>
<div class="form">
    <div class="form-group">
        <label for="">NIS</label>
        <input type="text" class="form-controll" name="nis" value="{{$students->nis}}" disabled>
    </div>

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-controll" name="nama" value="{{$students->nama}}" disabled>
    </div>

    <div class="form-group">
        <label for="">Class</label>
        <input type="text" class="form-controll" name="kelas" value="{{$students->kelas}}" disabled>
    </div>

    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-controll" name="alamat" value="{{$students->alamat}}" disabled>
    </div>

    <div class="form-group">
        <label for="">Date of birth</label>
        <input type="text" class="form-controll" name="tgl_lahir" value="{{$students->tgl_lahir}}" disabled>
    </div>



</div>

@endsection