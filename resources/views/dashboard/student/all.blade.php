@extends('Dashboard.layout.main')

@section('content')
    <h1> Ini adalah student </h1>
    <a type="button" class="btn btn-outline-warning" href="/Dashboard/student/create">Add data student</a>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success')}}
        </div>
    @endif

    <table class="table container">
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $key => $student)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student["nis"]}}</td>
                <td>{{$student["nama"]}}</td>
                <td>{{$student->kelas->nama}}</td>
                <td>
                    <a type="button" class="btn btn-outline-success" href="/Dashboard/student/detail/{{$student['id']}}">Detail</a>

                    <form method="POST" action="/Dashboard/student/delete/{{ $student->id }}" class="d-inline-flex p-2" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>

                    <a type="button" class="btn btn-outline-warning" href="/Dashboard/student/edit/{{ $student->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    
    <div class="pagination">{{ $students->links() }}</div> <!-- Move pagination outside the loop -->
@endsection