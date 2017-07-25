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
                            <div class="form-group col-sm-10">
                                <div class="col-sm-6">
                                    <input name="nbIngredients" type="text" value="4" hidden>
                                    <label class="control-label">Tomates</label><input type="text" name="ingredient1" value="tomate radioactive" hidden><input class="form-control col-sm-3" type="text" placeholder='quantité' name="quantity1" value="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input type="text"  name="ingredient2" value="tomate" hidden><input class="form-control col-sm-3" type="text" placeholder='quantité' name="quantity2" value="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input type="text"  name="ingredient3" value="tomate tueuse" hidden><input class="form-control col-sm-3" type="text" placeholder='quantité' name="quantity3" value="coulis" required>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tomates</label><input type="text"  name="ingredient4" value="tomate gentille" hidden><input class="form-control col-sm-3" type="text" placeholder='quantité' name="quantity4" value="4 coupées en cube" required>
                                </div>
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
<script>
    $('#submitRecipe').on('click', function() {
        if( !$('#title').val()) {
            $('#title').addClass('warning');
        }if(!$('#description').val()){
            $('#description').addClass('warning');
        }if($('#title').val() && $('#description').val()) {
            $('#title').removeClass('warning');
            $('#description').removeClass('warning');
            $('#newRecipeForm').submit();
        }
    })
</script>
@endsection