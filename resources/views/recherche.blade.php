@extends('layouts.app')

@section('title', env("app_name").' - Recherche')

@section('body-attr')
id="search-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container mb-5">
    <h1 class="w-100 text-center blue mb-4">{{$search}}</h1>
    
    {{--<div class="bg-dark-grey w-100 p-2 mb-4">
        <h2 class="blue h5 mb-0 mt-3">{{$search}}</h2>
    </div>--}}

    <div class="row border-bottom mx-2 mb-2">
        <div class="col-10 text-left font-weight-bold">Intitulé</div>
        <div class="col-2 text-center font-weight-bold">Durée</div>
    </div>
    @foreach($formations as $formation)
        <div class="row mx-2">
            <div class="col-10"><a href="{{route('formation', ['id' => $formation->id])}}">{{$formation->nom}}</a></div>
            <div class="col-2 text-center purple font-weight-bold">{{$formation->duree}}</div>
        </div>
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection