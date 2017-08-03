@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="retour">
            <a href='/selectionPanier' class="btn btn-primary">Retour</a>
            <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Annuler et retour Menu</a>
        </div>
        <h3>Suggestions</h3>

        <div class="panel panel-default">
            <div class="panel-heading">Les meilleures suggestions</div>
            <div class="panel-body">
                @if($bestOnes) @foreach($bestOnes as $bestResult)
                <div class="resultatCarte col-sm-3">

                    <span style="text-align:center;"><a href="/details/recette/{{ $bestResult['id'] }}"><i class="fa fa-info-circle detailsRecipe" aria-hidden="true"></i></a></span>
                    <b>{{ $bestResult['name'] }}</b>
                    <br>
                    <li><u>Correspondent</u> : @foreach($bestResult['matching'] as $matching) {{ $matching }} @endforeach
                    </li>
                    @endforeach
                </div>
                @else
                <div>
                    Pas de suggestions pour cette catégorie.
                    <br>
                </div>
                @endif
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading">Les autres suggestions</div>
            <div class="panel-body">
                @if($goodOnes) @foreach($goodOnes as $goodResult)
                <div class="resultatCarte col-sm-3">
                    <div class="nomRecetteResultat"><span style="text-align:center;"><a href="/details/recette/{{ $goodResult['id'] }}"><i class="fa fa-info-circle detailsRecipe" aria-hidden="true"></i></a></span>                        <b>{{ $goodResult['name'] }}</b>
                    </div>
                    <div class="detailsRecettesResultat">
                        <li>
                            <u>Correspondent</u> : @foreach($goodResult['matching'] as $matching) {{ $matching }} @endforeach
                        </li>

                        @if($goodResult['missingVegiesForRecipe'])
                        <li>
                            <u>Manquant</u> : @foreach($goodResult['missingVegiesForRecipe'] as $missing) {{ $missing }} @endforeach
                        </li>
                        @endif @if($goodResult['nonMatching'])
                        <li>
                            <u>En trop</u> : @foreach($goodResult['nonMatching'] as $nonMatching) {{ $nonMatching }} @endforeach
                        </li>
                        @endif
                    </div>
                </div>
                @endforeach @else
                <div>
                    Pas de suggestions pour cette catégorie.
                    <br>
                </div>
                @endif
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Peut correspondre</div>
            <div class="panel-body">
                @if($junk) @foreach($junk as $junkResult)
                <div class="resultatCarte col-sm-3">
                    <div class="nomRecetteResultat"><span style="text-align:center;"><a href="/details/recette/{{ $junkResult['id'] }}"><i class="fa fa-info-circle detailsRecipe" aria-hidden="true"></i></a></span>                        <b>{{ $junkResult['name'] }}</b></div>

                    <div class="detailsRecettesResultat">
                        <li>
                            <u>Correspondent</u> : @foreach($junkResult['matching'] as $matching) {{ $matching }} @endforeach
                        </li>

                        @if($junkResult['missingVegiesForRecipe'])
                        <li>
                            <u>Manquant</u> : @foreach($junkResult['missingVegiesForRecipe'] as $missing) {{ $missing }} @endforeach
                        </li>
                        @endif @if($junkResult['nonMatching'])
                        <li>
                            <u>En trop</u> : @foreach($junkResult['nonMatching'] as $nonMatching) {{ $nonMatching }} @endforeach
                        </li>
                        @endif
                    </div>
                    @endforeach @else
                    <div>
                        Pas de suggestions pour cette catégorie.
                        <br>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>

</div>

@endsection
@section('js')
@endsection