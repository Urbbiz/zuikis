@extends('layout.main')

@section('content')
    <h1>Vartai Į Sodą</h1>
    @foreach(range(1,5) as $key => $value)
        @if($id > 55)
            {{ $vaisius }} --- {{ $id }}
        @endif
    @endforeach
@endsection



@section('title') Mano Sodo Vartai @endsection
