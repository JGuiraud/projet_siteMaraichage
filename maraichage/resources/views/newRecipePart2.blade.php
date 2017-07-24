@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <a href="/recettes" class="btn btn-primary">Annuler et retour</a>
        <br>
        <br>
            <div class="panel panel-default">

                <div class="panel-heading">Créer une nouvelle recette</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('createRecipe') }}">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Titre recette</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Saison</label>
                            <div class="col-xs-offset-1">
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
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="control-label col-sm-2" for="title"><i class="fa fa-question-circle" aria-hidden="true" title="Ces ingrédients sont ceux sélectionnés précédemment. Veuillez entrez les quantités associées"></i> Ingrédients</label>
                            <div class="form-group col-sm-10">
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title"><i class="fa fa-question-circle" aria-hidden="true" title="Le cas échéant, veuillez ajouter à la recette les ingrédients supplémentaires."></i> Ingrédients supplémentaire</label>
                            <div class="form-group col-sm-10">
                                {{-- <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' >
                                </div> --}}
                                <div class="input_fields_wrap control-label">
                                <div>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="extraIngredient" placeholder="ingrédient supplémentaire">
                                        {{-- <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' > --}}
                                    </div>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="extraQuantity" placeholder="Quantité">
                                        {{-- <label class="control-label">Tomates</label><input class="form-control col-sm-3" type="text" placeholder='quantité' > --}}
                                    </div>
                                </div>



                                </div>
                                <br>
                                <br>
                                <div class="col-sm-12">
                                    <button class="add_field_button btn btn-basicfault">Ajouter un nouvel ingrédient</button>
                                </div>
                            </div>
                        </div>







                    {{-- <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div> --}}
                    </form>

                </div>

                <div class="panel-footer">
                    <a href="/ajouter/recette" class="btn btn-success">Ajouter la recette</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
