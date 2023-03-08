@extends('master')

@section('title', 'Novosti')

@section('sadrzaj')
    <h2>Novosti</h2>
    <ul>
        @foreach($novosti as $novost)
        <li><a href="/novost/{{$novost['id']}}">{{$novost['naziv']}}</a></li>
        @endforeach
    </ul>
@endsection    
