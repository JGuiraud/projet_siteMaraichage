@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="retour">
                <a href="/recettes" class="btn btn-danger">Annuler et retour</a>
            </div>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">Créer une nouvelle recette</div>

                <div class="panel-body">


                    Sélectionnez uniquement les légumes que vous produisez et qui entrent dans la conception de la nouvelle recette. Les quantités de ces derniers ainsi que les ingrédients supplémentaires seront selectionnés dans la prochaine étape.

                </div>
                <div class="panel-footer">
                    <a href="/nouvelle/recette/part2" class="btn btn-success">Étape suivante <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script src="{{ asset('js/recipe1.js') }}"></script>

@endsection