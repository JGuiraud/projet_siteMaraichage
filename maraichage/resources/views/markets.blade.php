@extends('layouts.app')
@section('css')
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.1.0/dist/leaflet.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
                                <input type="text" class="form-control" id="details" name="details" placeholder="jour, horaire, details" required>
                            </div> 
                            <input type="text" id="latitude" name="latitude" value="" hidden>
                            <input type="text" id="longitude" name="longitude" value="" hidden> 
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Liste des marchés</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Supprimer</th>
                                <!-- <th>N°</th> -->
                                <th>Ville</th>
                                <!-- <th>Latitude</th>
                                <th>Longitude</th> -->
                                <th>Commentaires</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($markets as $market)
                            <tr>
                                <td>
                                    <a class="btn btn-default btn-xs" href="/supprimer/marche/{{ $market->id }}">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                                <!-- <td>{{ $market->id }}</td> -->
                                <td>{{ $market->city }}</td>
                                <!-- <td>{{ $market->latitude }}</td>
                                <td>{{ $market->longitude }}</td> -->
                                <td>{{ $market->details }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Map en ligne</div>
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
    <script src="https://unpkg.com/leaflet@1.1.0/dist/leaflet.js"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>

@endsection