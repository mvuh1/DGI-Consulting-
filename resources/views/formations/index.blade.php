@extends('layouts.master')

@section('content')
    <div class="container">
        <br><br>
        <a class="uk-button uk-button-default" style='font-size: 0.5em'
            href="{{ route('formations.create') }}"><strong> Add new Formation</strong></a>
        <br>
        <table class="uk-table uk-table-striped">
            <thead>
                <tr >
                    <th class='uk-text-bold' style='font-size: 0.8em'>Intitule</th>
                    <th class='uk-text-bold' style='font-size: 0.8em'>Date de debut</th>
                    <th class='uk-text-bold' style='font-size: 0.8em'>Date de fin</th>
                    <th class='uk-text-bold' style='font-size: 0.8em'>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formations as $formation)
                    <tr>
                        <td>{{ $formation->intitule }}</td>
                        <td>{{ $formation->date_debut }}</td>
                        <td>{{ $formation->date_fin }}</td>
                        <td>
                            <form action="{{ route('formations.destroy',$formation->id) }}" method="POST"
                                onsubmit="return confirm('Etes vous sur de vouloir supprimer?')">
                                @csrf
                                @method('DELETE')
                                <div class="dropdown">
                                    <a class="btn btn-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <span uk-icon="more"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right row">
                                        <a class="uk-margin-left" href="{{ route('formations.show',$formation->id) }}"><span uk-icon="info"></span></a>
                                        <a class="uk-margin-left" href="{{ route('formations.edit',$formation->id) }}"><span uk-icon="pencil"></span></a>
                                        <button type="submit" style="color: red" class="uk-margin-left uk-button-default"><span uk-icon="trash"></span></button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
