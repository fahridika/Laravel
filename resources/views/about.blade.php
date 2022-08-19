@extends('layout.main')
@section('container')
    <h1> Halaman home</h1>
    <h3>{{$nama}}</h3>
    
    <p>{{$email}}</p>
    <img src="img/{{$image}}" alt="{{$nama}}" width='200' class="img-tumbnaill rounded-circle">

{{-- <script src="js/script.js"></script> --}}
@endsection