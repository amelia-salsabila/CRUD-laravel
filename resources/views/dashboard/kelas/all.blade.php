@extends('Dashboard.layout.main')

@section('content')
<h1> Data Kelas</h1>
<a type="button" class="btn btn-outline-warning" href="/Dashboard/kelas/add">Add class</a>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success')}}
    </div>
@endif

<table class="table container">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Action</th>

    </tr>

    
    @foreach ($class as $classes)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$classes["nama"]}}</td>
        <td>

            <form method="POST" action="/Dashboard/kelas/delete/{{ $classes->id }}" class="d-inline-flex p-2" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>

            <a type="button" class="btn btn-outline-warning" href="/Dashboard/kelas/edit/{{ $classes->id }}">Edit</a>

        </td>
    </tr>
@endforeach
</table>



@endsection