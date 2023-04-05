@extends('master')

@section('title', $naziv)

@section('sadrzaj')

<div class="container-fluid pt-5">
    <div class="container">
        <h2>Izmjena {{$naziv}}</h2>
        <form action="/predmeti/{{$predmet->id}}" method="post">
        @method('PUT')
        @csrf
        Naziv:
        <input type="text" name="naziv"  id="" value="{{$predmet->naziv}}"><br>
        @error('naziv')
        <br><p>{{$message}}</p><br>            
        @enderror
        Opis:
        <textarea name="opis" id="" cols="30" rows="10">{{$predmet->opis}}</textarea><br>
        @error('opis')
        <br><p>{{$message}}</p><br>            
        @enderror
        Status:
        <input type="text" name="status" id="" value="{{$predmet->status}}"><br>
        @error('status')
        <br><p>{{$message}}</p><br>            
        @enderror
        Ects:
        <input type="number" name="ects" id="" value="{{$predmet->ects}}"><br>
        @error('ects')
        <br><p>{{$message}}</p><br>            
        @enderror
        <button type="submit">Spremi</button>
        </form>
    </div>
</div>

@endsection    
