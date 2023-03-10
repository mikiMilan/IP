@extends('master')

@section('title', $naziv)

@section('sadrzaj')
    <h2>Predmeti</h2>
    <ul>
        @foreach($predmeti as $predmet)
        <li><a href="/predmet/{{$predmet['id']}}">{{$predmet['naziv']}}</a></li>
        @endforeach
    </ul>
@endsection    
