@extends('layout.main')

@section('content')
<a type="button" class="btn btn-outline-warning" href="/kelas/create">Add</a>
<br><br>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success')}}
    </div>
@endif

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nama</th>
    </tr>
    @foreach ($kelas as $key => $grade)
    <tr>
        <td>{{$grade["id"]}}</td>
        <td>{{$grade["nama"]}}</td>
    </tr>
@endforeach
</table>



@endsection