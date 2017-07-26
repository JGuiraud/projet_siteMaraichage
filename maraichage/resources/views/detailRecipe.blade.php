@extends('layouts.app')

@section('content')
@section('css')
  <style type="text/css" media="print">

   .no-print {
        display: none;
       }
    </style>
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="retour">
            <a href="/recettes" class="btn btn-primary no-print">Retourner à la liste</a>
        </div>
            <br>
            <div class="panel panel-default recetteAImprimer">
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
                <div class="panel-footer no-print">
                    <a id='print' class="btn btn-primary no-print"><i class="fa fa-print" aria-hidden="true"></i> Imprimer</a>
                    <a id='print' class="btn btn-primary no-print" title="Cette recette prendra la place de la précédente en vitrine"><i class="fa fa-eye" aria-hidden="true"></i> En vitrine</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>

$('#print').on('click', function() {
    window.print();
})

</script>
@endsection
