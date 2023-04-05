@extends('master')

@section('title', $naziv)

@section('sadrzaj')

<x-message />

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" 
    style="min-height: 200px">
        <h3 class="display-3 font-weight-bold text-white">Predmeti</h3>
    </div>
</div>
<!-- Header End -->

<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
            <h1 class="mb-4">Classes for Your Kids</h1>
        </div>
        <div class="row">
            @foreach($predmeti as $predmet)
            <x-predmet-kartica :prom="$predmet" />
            @endforeach
        </div>
    </div>
</div>
<!-- Class End -->
@endsection    
