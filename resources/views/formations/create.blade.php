@extends('layouts.master')

@section('content')
    <div class="container">
        <br><br>
        
        <h2>Publier une nouvelle Formation</h2><br>
        <form action="{{ route('formations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label> Intitule :</label>
                        <input name="intitule" uk-tooltip="title:Inser your intitule here"
                         class="uk-input uk-width-input" type="text" placeholder="intitule de la formation">
                    </div>
                    <div class="form-group uk-margin">
                        <label> Date de debut :</label>
                        <input name="date_debut" uk-tooltip="title:insert the start date"
                            class="uk-input uk-width-input" data-uk-datepicker="{format:'DD.MM.YYYY'}" type="date" placeholder="entrer la date de debut">
                    </div>
                    <div class="form-group uk-margin">
                        <label> Date de fin :</label>
                        <input name="date_fin" uk-tooltip="title:insert the end date"
                            class="uk-input uk-width-input" data-uk-datepicker="{format:'DD.MM.YYYY'}" type="date" placeholder="entrer la date de debut">
                    </div>
                    <div class="form-group uk-margin">
                        <button type="submit" class="uk-button uk-width-1-3 uk-button-primary"> <strong>Publier</strong></button>
                        <a class="uk-button uk-width-1-3 uk-button-danger" href="{{ route('formations.index') }}">Annuler</a>
                    </div>
                </div>
                <div class="col-md-6" style="height:100%">
                    <div uk-form-custom="target: true" style="width:100%">
                        <label for="image"> Image :</label>
                        <input name="image" type="file">
                        <input 
                            class="uk-input uk-width-input" type="texte" placeholder="Select your Image" disabled>
                    </div>
                    <div class="uk-margin" >
                        <label> Description :</label>
                        <textarea name="description" uk-tooltip="title:insert the description; pos: top-right"
                            class="uk-textarea" rows="6" placeholder="Entrer une description pour la formation"></textarea>
                    </div>
                </div>
                    
            </div>
        </form>
    </div>
@endsection
