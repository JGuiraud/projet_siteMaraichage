@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
            </div>
			<h3>Suggestions</h3>

                <div class="panel panel-default">
                    <div class="panel-heading">
                    Les meilleures suggestions
                    </div>
                    @if($bestOnes)

                    @foreach($bestOnes as $bestResult)
                        <div class="panel-body">
                            {{ $bestResult['name'] }}
                            <br>
                        </div>
                    @endforeach
                                        @else
                    <div class="panel-body">
                        Pas de suggestions pour cette catégorie.
                        <br>
                    </div>
                    @endif
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                    Les autres suggestions

                    </div>
                    @if($goodOnes)
                        @foreach($goodOnes as $goodResult)
                            <div class="panel-body">
                                {{ $goodOnes['name'] }}
                                <br>
                            </div>
                        @endforeach
                    @else
                    <div class="panel-body">
                        Pas de suggestions pour cette catégorie.
                        <br>
                    </div>
                    @endif

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Peut correspondre
                    </div>
                    @if($junk)

                    @foreach($junk as $junkResult)
                        <div class="panel-body">
                            {{ $junkResult['name'] }}
                            <br>
                        </div>
                    @endforeach
                                        @else
                    <div class="panel-body">
                        Pas de suggestions pour cette catégorie.
                        <br>
                    </div>
                    @endif
                </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection
