@extends('master')

@section('title', 'Prijava')

@section('sadrzaj')

<div class="container-fluid pt-5">
    <div class="container">
        <h2>Prijava</h2>
        <form action="/authentX" method="post">
        @csrf
        Name:
        <input type="text" name="name" id="" value="{{old('name')}}"><br>
        @error('name')
        <br><p>{{$message}}</p><br>            
        @enderror

        Password:
        <input type="password" name="password" id="" value=""><br>
        @error('password')
        <br><p>{{$message}}</p><br>            
        @enderror

        <button type="submit">Prijava</button>
        </form>
    </div>
</div>

@endsection  