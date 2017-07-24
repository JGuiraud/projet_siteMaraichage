@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="/recettes" class="btn btn-primary">Retour</a>
            <br>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">Recette : {{$recipe->title}}</div>
                    <div class="panel-body">

                        <div class="ingredients">
                            <h4>Ingrédients</h4>
                                @for ($i = 0; $i<sizeof($vegies); $i++)
                                        <ul>
                                            <li>{{$vegies[$i]}} : {{$vegies_quantities[$i]}}</li>
                                        </ul>
                                @endfor
                        </div>

                        <div class="extraIngredients">
                            <h4>Ingrédients supplémentaires :</h4>
                                @for ($i = 0; $i<sizeof($ingredients); $i++)
                                        <ul>
                                            <li>{{$ingredients[$i]}} : {{$ingredients_quantities[$i]}}</li>
                                        </ul>
                                @endfor
                        </div>

                        <div class="recetteText">
                            <h4>Recette : </h4>
                            <p>{!!$recipe_text!!}</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
