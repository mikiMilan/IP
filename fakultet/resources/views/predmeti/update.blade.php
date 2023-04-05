@extends('master')

@section('title', 'Kreiranje predmeta')

@section('sadrzaj')

<div class="container-fluid pt-5">
    <div class="container">
        <h2>Kreiranje predmeta</h2>
        <form action="/predmeti" method="post">
        @csrf
        Naziv:
        <input type="text" name="naziv"  id="" value="{{old('naziv')}}"><br>
        @error('naziv')
        <br><p>{{$message}}</p><br>            
        @enderror
        Opis:
        <textarea name="opis" id="" cols="30" rows="10">{{old('opis')}}</textarea><br>
        @error('opis')
        <br><p>{{$message}}</p><br>            
        @enderror
        Status:
        <input type="text" name="status" id="" value="{{old('status')}}"><br>
        @error('status')
        <br><p>{{$message}}</p><br>            
        @enderror
        Ects:
        <input type="number" name="ects" id="" value="{{old('ects')}}"><br>
        @error('ects')
        <br><p>{{$message}}</p><br>            
        @enderror
        <button type="submit">Spremi</button>
        </form>
    </div>
</div>

@endsection    
