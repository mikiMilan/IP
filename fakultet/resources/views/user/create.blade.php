@extends('master')

@section('title', 'Registracija')

@section('sadrzaj')

<div class="container-fluid pt-5">
    <div class="container">
        <h2>Registracija</h2>
        <form action="/register" method="post">
        @csrf
        Name:
        <input type="text" name="name" id="" value="{{old('name')}}"><br>
        @error('name')
        <br><p>{{$message}}</p><br>            
        @enderror

        Email:
        <input type="email" name="email" id="" value="{{old('email')}}"><br>
        @error('email')
        <br><p>{{$message}}</p><br>            
        @enderror

        Password:
        <input type="password" name="password" id="" value=""><br>
        @error('password')
        <br><p>{{$message}}</p><br>            
        @enderror

        Confirmation:
        <input type="password" name="password_confirmation" id="" value=""><br>
        @error('password_confirmation')
        <br><p>{{$message}}</p><br>            
        @enderror
        
        <button type="submit">Spremi</button>
        </form>
    </div>
</div>

@endsection  