@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
            </div>
			<h3>Mes recettes</h3>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Ajouter une Recette
                </div>
                <div class="panel-body">
                    Pour ajouter une nouvelle recette, cliquez sur le bouton suivant
                    <br>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-success"href="/nouvelle/recette/part1"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter une recette</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gérer les recettes présentes</div>

                <div class="panel-body">


                    <table class="table table-striped">

                         <thead>
                        <tr>
                            <th id="supprimerCol">Sup.</th>
                            <th id="detailsCol">Détails</th>
                            <th id="id">id</th>
                            <th>Titre</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td style="text-align:center;"><i href="/supprimer/recette/{{ $recipe->id }}" class="fa fa-times deleteRecipe" aria-hidden="true"></i></td>
                             <td style="text-align:center;"><a href="/details/recette/{{ $recipe->id }}"><i class="fa fa-info-circle detailsRecipe" aria-hidden="true"></i></a></td>
                             <td id="idList">{{$recipe->id}}</td>
                            <td>{{$recipe->title}}</td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
