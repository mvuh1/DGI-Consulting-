@extends('layouts.master')

@section('content')
<br><br>
    <div class="container">
        <h2>Modifier la publication</h2><br>
        <form action="{{ route('formations.update', $formation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label> Intitule :</label>
                        <input name="intitule" uk-tooltip="title:Inser your intitule here"
                        class="uk-input uk-width-input" type="text" value="{{ $formation->intitule }}">
                    </div>
                    <div class="form-group uk-margin">
                        <label> Date de debut :</label>
                        <input name="date_debut" uk-tooltip="title:insert the start date" value="{{ $formation->date_debut }}"
                            class="uk-input uk-width-input" data-uk-datepicker="{format:'DD.MM.YYYY'}" type="date">
                    </div>
                    <div class="form-group uk-margin">
                        <label> Date de fin :</label>
                        <input name="date_fin" uk-tooltip="title:insert the end date" value="{{ $formation->date_fin }}"
                            class="uk-input uk-width-input" data-uk-datepicker="{format:'DD.MM.YYYY'}" type="date">
                    </div>
                    <div class="form-group uk-margin">
                        <button type="submit" class="uk-button uk-width-1-3 uk-button-primary"> <strong>Modifier</strong></button>
                        <a class="uk-button uk-width-1-3 uk-button-danger" href="{{ route('formations.index') }}">Annuler</a>
                    </div>
                </div>
                <div class="col-md-6" style="height:100%">
                    <div uk-form-custom="target: true" style="width:100%">
                        <label> Image :</label>
                        <input type="file">
                        <input name="image" value="{{ $formation->image }}"
                            class="uk-input uk-width-input" type="text" disabled>
                    </div>
                    <div class="uk-margin" >
                        <label> Description :</label>
                        <textarea name="description" uk-tooltip="title:insert the description; pos: top-right"
                            class="uk-textarea" rows="6" placeholder="{{ $formation->description }}"></textarea>
                    </div>
                </div>
                    
            </div>
        </form>
    </div>
@endsection
