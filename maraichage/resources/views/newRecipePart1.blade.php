@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <a href="/recettes" class="btn btn-danger">Annuler et retour</a>
        <br>
        <br>
            <div class="panel panel-default">
                <div class="panel-heading">Créer une nouvelle recette</div>

                <div class="panel-body">


                   Sélectionnez uniquement les légumes que vous produisez et qui entrent dans la conception de la nouvelle recette. Les quantités de ces derniers ainsi que les ingrédients supplémentaires seront selectionnés dans la prochaine étape.

                    {{-- <div class="form-group">
                        <label for="" class="control-label col-sm-2">Saison(s)</label>
                        <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="sp"> Printemps
                        </label>
                        <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="su"> Été
                        </label>
                        <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="au"> Automne
                        </label>
                        <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="wi"> Hiver
                        </label>
                    </div> --}}


                </div>
                <div class="panel-footer">
                    <a href="/nouvelle/recette/part2" class="btn btn-success">Étape suivante</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
