@extends('layouts.master')

@section('content')
<br><br>
<div style="margin-left: 7%" class="uk-card container uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="{{$formation->image_path}}" alt="" uk-cover>
        <canvas  width="50" height="350"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h1 class="uk-card-title uk-text-bold" style='font-size: 1.5em'>{{ $formation->intitule }}</h3>
            <p> date de debut: <strong> {{ $formation->date_debut }}</strong></p>
            <p>date de fin: <strong> {{ $formation->date_fin }}</strong></p>
            <p>Description: <strong> {{ $formation->description }}</strong></p>
            <div class="">
                <a class="btn btn-success"
                    style="background-color: #0ca5b7" href="{{ route('formations.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
