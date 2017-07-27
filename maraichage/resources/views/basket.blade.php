@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		    <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
        	</div>
			<h3>Panier & Recette</h3>

			<div class="panel panel-default">
				<div class="panel-heading">Recherche</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal" id="formBasket">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="control-label col-sm-2" for="searchVegie">Nom</label>
							<div class="col-sm-10">
								<input id="searchVegie" type="search" name="name" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Saison(s)</label>
							<div class="col-xs-offset-1">
								<label class="checkbox-inline">
									<input name="sp" type="checkbox" id="sp"> <span>Printemps</span>
								</label>
								<label class="checkbox-inline">
									<input name="su" type="checkbox" id="su"> Été
								</label>
								<label class="checkbox-inline">
									<input name="au" type="checkbox" id="au"> Automne
								</label>
								<label class="checkbox-inline">
									<input name="wi" type="checkbox" id="wi"> Hiver
								</label>
							</div>
						</div>
						<span id="titleBasket">Récapitulatif du panier sélectionné :</span>
						<div id="basketReceiver" class="borderDiv"></div>
					</form>
				</div>
				<div class="panel-footer">
					<button class="btn btn-success" id="validateBasket"><i class="fa fa-check"></i> Valider panier</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Gérer les légumes présents</div>
				<div class="panel-body">
					@foreach($vegies as $key => $vegie)
					{{-- <label class="btn btn-primary vegie"
					name='{{ $vegie->name }}'
					sp="@if($vegiesSeasons[$key][0]) 1 @else 0 @endif"
					su="@if($vegiesSeasons[$key][1]) 1 @else 0 @endif"
					au="@if($vegiesSeasons[$key][2]) 1 @else 0 @endif"
					wi="@if($vegiesSeasons[$key][3]) 1 @else 0 @endif">
						<input type="checkbox" autocomplete="off" class="badgebox"> {{ $vegie->name }}
					</label> --}}
					{{-- <input class="vegie" name="{{ $vegie->name }}" type="checkbox" data-toggle="toggle" data-on="{{ $vegie->name }}" data-off="{{ $vegie->name }}"> --}}
					<button class="btn btn-secondary vegie" name="{{ $vegie->name }}" sp="{{ $vegiesSeasons[$key][0] }}" su="{{ $vegiesSeasons[$key][1] }}" au="{{ $vegiesSeasons[$key][2] }}" wi="{{ $vegiesSeasons[$key][3] }}">{{ $vegie->name }}</button>

					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
    <script src="{{ asset('js/basket.js') }}"></script>

@endsection


@section('css')

    <link href="{{ asset('css/basket.css') }}" rel="stylesheet">

@endsection