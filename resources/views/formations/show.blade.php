@extends('layouts.master')

@section('content')
<br><br>
<div class="uk-card container uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="images/light.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h1 class="uk-card-title uk-text-bold" style='font-size: 1.5em'>{{ $formation->intitule }}</h3>
            <p> date de debut: {{ $formation->date_debut }}</p>
            <p>date de fin: {{ $formation->date_fin }}</p>
            <p>{{ $formation->description }}</p>
            <div class="">
                <a class="btn btn-success"
                    style="background-color: #1d976c" href="{{ route('formations.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
