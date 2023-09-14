@extends ('layouts.master')
@section ('title','halaman showPost')

@section ('content')

<p> judul: {{$post -> judul}}</p>
<p> judul: {{$post -> deskripsi}}</p>
@endsection