@extends('layouts.app')

@section('header', 'about')

    @section('sidebar')
        <div class="container">
          <h1 class="display-1">Ini adalah About</h1>
        </div>
     @endsection
@endsection
@section('content')
    <p>Nim : {{ $nim }} <br> Nama : {{ $nama }}</p>
@endsection