@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="retour">
                <a href="/nouvelle/recette/part1" class="btn btn-primary"><i class="fa fa-backward" aria-hidden="true"></i> Retour au panier</a>
                <a href="/admin" class="btn btn-danger annulerRecette">Annuler et retour menu</a>
            </div>

        <br>
            <div class="panel panel-default">

                <div class="panel-heading">Créer une nouvelle recette</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" id="newRecipeForm" action="{{ route('createRecipe') }}">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label col-sm-2 required" for="title">Titre recette</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="" value="Tomate à la tomate et au coulis de tomate" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <label class="control-label col-sm-2" for="title"><i class="fa fa-question-circle" aria-hidden="true" title="Ces ingrédients sont ceux sélectionnés précédemment. Veuillez entrez les quantités associées"></i> Ingrédients</label>
                            <div class="form-group col-sm-10 localstorageReceiver">
                                <input class="nbIngredients" name="nbIngredients" type="text" value="" hidden>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title"><i class="fa fa-question-circle" aria-hidden="true" title="Le cas échéant, veuillez ajouter à la recette des ingrédients supplémentaires."></i> Ingrédients supplémentaire</label>
                            <div class="form-group col-sm-10">
                                <div class="input_fields_wrap control-label">
                                    <div>
                                        <input id="nbExtraingredients" type="text" name="nbExtraingredients" value="1" hidden>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="extraIngredient1" placeholder="ingrédient supplémentaire" value="petit pois">
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="extraQuantity1" placeholder="Quantité" value="400gm">
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

                        <div class="form-group">
                            <label for="" class="control-label col-sm-2 required">Description</label>
                            <div class="form-group col-sm-10">
                                <div class="col-sm-12">
                                    <textarea name="description" class="form-control" id="description" rows="10" required>Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.

Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia montium petiere celsorum.
Raptim igitur properantes ut motus sui rumores celeritate nimia praevenirent, vigore corporum ac levitate confisi per flexuosas semitas ad summitates collium tardius evadebant. et cum superatis difficultatibus arduis ad supercilia venissent fluvii Melanis alti et verticosi, qui pro muro tuetur accolas circumfusus, augente nocte adulta terrorem quievere paulisper lucem opperientes. arbitrabantur enim nullo inpediente transgressi inopino adcursu adposita quaeque vastare, sed in cassum labores pertulere gravissimos.
                                    </textarea>
                                 </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="panel-footer">
                    <button type="submit" id="submitRecipe"class="btn btn-success">
                    <i class="fa fa-plus" aria-hidden="true"></i>  Ajouter la recette</button>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/recipe2.js') }}"></script>
@endsection