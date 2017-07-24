@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Mes marchés</h3>
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un marché</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('createMarket') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Ville</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Saint-Gaudens" required>
                            </div>
                            <br>
                            <br>
                            <label class="control-label col-sm-2" for="title">Latitude</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="latitude" name="latitude" placeholder="43.1166700" required>
                            </div>
                            <br>
                            <br>
                            <label class="control-label col-sm-2" for="title">Longitude</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="longitude" name="longitude" placeholder="0.7333300" required>
                            </div>
                            <br>
                            <br>
                            <label class="control-label col-sm-2" for="title">Commentaires</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="details" name="details" placeholder="jour, horaire, details" required>
                            </div>
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
                    <form class="form-horizontal" method="POST" action="{{ route('destroyMarket') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Supprimer</th>
                                        <th>N°</th>
                                        <th>Ville</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Commentaires</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($markets as $market)
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                        </td>
                                        <td>{{ $market->id }}</td>
                                        <td>{{ $market->city }}</td>
                                        <td>{{ $market->latitude }}</td>
                                        <td>{{ $market->longitude }}</td>
                                        <td>{{ $market->details }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Map en ligne</div>
                <div class="panel-body">
                    carte à venir
                </div>
            </div>
        </div>
    </div>
</div>
@endsection