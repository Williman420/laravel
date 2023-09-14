@extends ('layouts.master')
@section ('title','profile')

@section ('content')
    <h1>profile</h1>

    <!-- @if($nomor == 1) 
        <p>ini adalah nomor {{$nomor}}</p>
    
    @else 
        <p>bukan nomor {{$nomor}}</p>
    
    @endif -->

    <!-- @for($i = 0; $i < $nomor; $i++)
        <p>i = {{$i}}</p>
    @endfor -->
    @foreach ($hobi as $hobi)
<p>{{$hobi -> hobi}}</p>
    @endforeach 
@endsection