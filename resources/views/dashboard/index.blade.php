@extends('dashboard.layout.main')

@section('content')
<h1>Hellow {{auth()->user()->name}}</h1>
<p>This is a home dashboard page</p>
@endsection