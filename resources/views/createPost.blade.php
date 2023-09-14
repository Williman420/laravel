@extends ('layouts.master')
@section ('title','ini adalah createPost')

@section ('content')

<form action="/post" method = "post">
    @csrf
        <label for="judul">Judul</label>
        <input type="text" name = "judul" id = "judul">

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        <input type="submit" name= "submit" value="Create">

</form>
@endsection