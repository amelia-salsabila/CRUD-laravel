@extends('layout.main')

@section('content')
    <h1>Data Students</h1>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session ('success')}}
        </div>
    @endif

    <table class="table table-striped">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student['nis'] }}</td>
                <td>{{ $student['nama'] }}</td>
                 <td>{{ $student->kelas->nama }}</td>
                  <td>{{ $student['tgl_lahir'] }}</td>
                <td>{{ $student['alamat'] }}</td>
                <td>
                    <a type="button" class="btn btn-outline-success" href="/student/detail/{{$student['id']}}">Detail</a>
                   
            </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-center">
  {{ $students->links()}}
</div>
@endsection