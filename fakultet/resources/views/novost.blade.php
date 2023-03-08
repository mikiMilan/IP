@extends('master')

@section('title', $naziv)

@section('sadrzaj')
    <h2>Novost: {{$naziv}}</h2>
    <p>{{$opis}}</p>
@endsection    
