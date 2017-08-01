@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                    <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
            </div>
            <h3>Mes marchés</h3>
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un marché</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="form" method="POST" action="{{ route('createMarket') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Ville</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Entrer une ville" required>
                                <input type="text" id="city_bdd" name="city_bdd" value="" hidden>
                            </div>
                            <br>
                            <br>
                            <label class="control-label col-sm-2" for="title">Commentaires</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="details" name="details" placeholder="jour, horaire, details (max 5OO caract.)" maxlength="500" required>
                            </div>
                            <input type="text" id="latitude" name="latitude" value="" hidden>
                            <input type="text" id="longitude" name="longitude" value="" hidden>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success" id="addcity"><i class="fa fa-plus"></i> Ajouter</button>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Liste des marchés</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th id="supprimerCol">Sup.</th>
                                <th>Ville</th>
                                <th>Commentaires</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($markets as $market)
                            <tr>
                                <td style="text-align:center;">
                                    @if ($market->id !== 1)
                                    <a href="/supprimer/marche/{{ $market->id }}">
                                        <span class="fa fa-times"></span>
                                    </a>
                                    @endif
                                </td>
                                <td class="market_id" hidden>{{ $market->id }}</td> 
                                <td class="market_city">{{ $market->city }}</td>
                                <td class="market_latitude" hidden>{{ $market->latitude }}</td>
                                <td class="market_longitude" hidden>{{ $market->longitude }}</td>
                                <td class="market_details" hidden>{{ $market->details }}</td>
                                <td>{{ $market->details }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Visuel de la carte</div>
                <div class="panel-body">
                    <div id="map">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7EtFbAhBZWZMCI_9OaOpLNPkjVRcKlGU&libraries=places&callback=initAutocomplete" async defer></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>

@endsection
