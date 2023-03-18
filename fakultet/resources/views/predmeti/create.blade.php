@extends('master')

@section('title', 'Kreiranje predmeta')

@section('sadrzaj')

<div class="container-fluid pt-5">
    <div class="container">
        <h2>Kreiranje predmeta</h2>
        <form action="/predmeti" method="post">
        @csrf
        Naziv:
        <input type="text" name="naziv" id=""><br>
        Opis:
        <textarea name="opis" id="" cols="30" rows="10"></textarea><br>
        Status:
        <input type="text" name="status" id=""><br>
        Ects:
        <input type="number" name="ects" id=""><br>
        <button type="submit">Spremi</button>
        </form>
    </div>
</div>

@endsection    
