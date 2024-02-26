@extends('layout.main')

@section('content')
    <h1>Create a New Class</h1>
    <div class="col-lg-6">
        <form method="post" action="/kelas/add">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" required id="nama" name="nama" value="{{old('nama')}}">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    
@endsection
