@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recettes</div>

                <div class="panel-body">


                    <table class="table table-striped">

                         <thead>
                        <tr>
                            <th id="supprimerCol">Sup.</th>
                            <th id="detailsCol">Détails</th>
                            <th>Titre</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td style="text-align:center;"><i href="/supprimer/recette/{{ $recipe->id }}" class="fa fa-times deleteRecipe" aria-hidden="true"></i></td>
                            <td style="text-align:center;"><i class="fa fa-info detailsRecipe" aria-hidden="true"></i></td>

                            <td>{{$recipe->title}}</td>
                        </tr>


 {{-- <td style="text-align:center;"><a href="/supprimer/recette/{{ $recette->id }}" target="_blank"><i class="fa fa-info-cross" aria-hidden="true"></i></a></td>
                            <td style="text-align:center;"><a href="/details/recette/{{ $recette->id }}" target="_blank"><i class="fa fa-info-cross" aria-hidden="true"></i></a></td> --}}

                    @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
