@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		            <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
            </div>
			<h3>Mes légumes</h3>

			<div class="panel panel-default">
				<div class="panel-heading">Ajouter un Légume</div>
				<div class="panel-body">
					<form id="vegieForm" action="/legumes/create" method="post" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="control-label col-sm-2" for="addVegie">Nom</label>

							<div class="col-sm-10">
								<input id="addVegie" type="text" name="name" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Saison(s)</label>
							<div class="col-xs-offset-1">
								<label class="checkbox-inline">
									<input name="season[sp]" type="checkbox" id="sp"> Printemps
								</label>
								<label class="checkbox-inline">
									<input name="season[su]" type="checkbox" id="su"> Été
								</label>
								<label class="checkbox-inline">
									<input name="season[au]" type="checkbox" id="au"> Automne
								</label>
								<label class="checkbox-inline">
									<input name="season[wi]" type="checkbox" id="wi"> Hiver
								</label>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-footer">
					<button id="subm" class="btn btn-success" type="submit"> <i class="fa fa-plus" aria-hidden="true"></i> Ajouter le légume</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Gérer les légumes présents</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th id="supprimerCol">Sup.</th>
								<th>Nom</th>
								<th>Pri.</th>
								<th>Eté</th>
								<th>Aut.</th>
								<th>Hiv.</th>
							</tr>
						</thead>
						{{-- toute la suite de VegetableController@show ce trouve dans cette boucle --}}
						@foreach($vegies as $key => $vegie)
						{{-- pour chacun des légumes --}}
						<tr>
							<td style="text-align:center;"><i class="fa fa-times deleteVegie" href="/legumes/suppr/{{ $vegie->id }}" name="{{ $vegie->name }}"></i></td>
							<td>{{ $vegie->name }}</td>
								{{-- on fait 4 colones dans l'ordre spring summer autumn winter et on place sous condition soit un 'tick' ('&#10003') soit un trait d'union, c'est pour cette raison qu'on a stocker soit des 1 soit des 0 --}}
							<td>
								@if($vegie->seasons->contains('slug', 'sp'))
								{{-- ici le 0 est la position qu'on a donner a spring --}}
								&#10003
								@else
								-
								@endif
							</td>
							<td>
								@if($vegie->seasons->contains('slug', 'su'))
								{{-- ici le 1 est la position qu'on a donner a summer --}}
								&#10003
								@else
								-
								@endif
							</td>
							<td>
								@if($vegie->seasons->contains('slug', 'au'))
								&#10003
								@else
								-
								@endif
							</td>
							<td>
								@if($vegie->seasons->contains('slug', 'wi'))
								&#10003
								@else
								-
								@endif
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
{{-- Modals --}}
				<div class="modal fade" id="modal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">Attention !</h3>
							</div>
							<div class="modal-body">
								<p>Pour ajouter un légume, vous devez d'abord entrer son nom.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modal2" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">Attention !</h3>
							</div>
							<div class="modal-body">
								<p>Le légume que vous essayez d'ajouter existe déjà dans la liste</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>

@endsection

@section('js')

    <script src="{{ asset('js/vegies.js') }}"></script>


@endsection

@section('css')
<style>
i:hover {
	cursor: pointer;
}

</style>

@endsection
