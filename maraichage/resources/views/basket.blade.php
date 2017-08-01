@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		    <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
        	</div>
			@if($button)
				<h3>Imprimer une recette</h3>
				<div class="panel panel-default warningpanel">
					<div class="panel-body"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					Pour imprimer ou mettre en avant une recette sur le site site internet, il est nécessaire de d'abord choisir les légumes que vous souhaitez utiliser. Plusieurs recettes seront alors proposées dans la page suivante.</div>
				</div>
			@else
				<h3>Ajouter un recette : sélection des légumes</h3>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">Recherche</div>
				<div class="panel-body">
					<form action='/suggestion/recettes' method="get" class="form-horizontal" id="formBasket">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="control-label col-sm-2" for="searchVegie">Chercher <br> un légume</label>
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

							<i class="fa fa-trash" title="Vider le panier"> | </i>
						<span id="titleBasket">Récapitulatif du panier sélectionné :</span>
						<div id="basketReceiver" class="borderDiv">
						</div>
						@if($button)
						<div id="inputReceiver">
						</div>
						@endif
					</form>
				</div>
				<div class="panel-footer">
				@if($button)
					<a class="btn btn-success" id="validateBasket"><i class="fa fa-check"></i>
					Trouver des recettes</a>
				@else
					<a href='/nouvelle/recette/part2' class="btn btn-success" id="validateBasket"><i class="fa fa-check"></i>
					Valider panier</a>
				@endif
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

					<button class="btn btn-secondary vegie" name="{{ $vegie->name }}" sp="{{ $vegiesSeasons[$key][0] }}" su="{{ $vegiesSeasons[$key][1] }}" au="{{ $vegiesSeasons[$key][2] }}" wi="{{ $vegiesSeasons[$key][3] }}">{{ $vegie->name }}</button>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
	@if($button)
    <script src="{{ asset('js/basket.js') }}"></script>
	@else
    <script src="{{ asset('js/recipe1.js') }}"></script>
	@endif

@endsection


@section('css')

    <link href="{{ asset('css/basket.css') }}" rel="stylesheet">

@endsection