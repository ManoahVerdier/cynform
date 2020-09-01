@extends('layouts.app')

@section('title', env("app_name")." - ".$categorie->nom)
@section('description', env("app_name")." - ".$categorie->nom)

@section('body-attr')
id="form-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.breadcrumbs')
@endsection

{{-- Breadcrumbs --}}


{{-- Content --}}
@section('content')

<div class="container">
    <h1 class="w-100 text-center blue mb-3">{{$categorie->nom}}</h1>
    @foreach($categorie->sous_categories()->orderBy('slug')->get() as $ss_categ)
        <div class="bg-grey w-100 p-2 mb-4 mt-4">
            <h2 class="blue h5 mb-0">Formations {{$ss_categ->nom}}</h2>
        </div>

        <div class="row border-bottom mx-2 mb-2">
            <div class="col-9 col-md-10 text-left font-weight-bold">Intitulé</div>
            <div class="col-3 col-md-2 text-center font-weight-bold">Durée</div>
        </div>
        @foreach($ss_categ->formations()->orderBy('nom')->get() as $formation)
            <div class="row mx-2 my-2">
                <div class="col-9 col-md-10">
                    @if($formation->slug ?? false)
                        <a href="{{route('formation_slug', ['formation' => $formation->slug])}}">{{$formation->nom}}</a>
                    @else 
                        <a href="{{route('formation', ['formation' => $formation->id])}}">{{$formation->nom}}</a>
                    @endif
                </div>
                <div class="col-3 col-md-2 text-center purple font-weight-bold">{{$formation->duree}}</div>
            </div>
        @endforeach
    @endforeach
</div>
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection