@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Ajouter un Légume</div>
				<div class="panel-body">
					<form action="/legumes/create" method="post">
						{{ csrf_field() }}
						<label for="addVegie">Nom du légume</label>
						<input id="addVegie" type="text" name="name" value="pokomon"><br />
						<label for="sp">printemps</label>
						<input type="checkbox" name="sp" id="sp">
						<label for="su">été</label>
						<input type="checkbox" name="su" id="su" checked><br />
						<label for="au">automne</label>
						<input type="checkbox" name="au" id="au">
						<label for="wi">hiver</label>
						<input type="checkbox" name="wi" id="wi">
						<button type="submit">Ajouter légume</button>
					</form>
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
						<tr>
							<td>-</td>
							<td>Nom</td>
							<td>P</td>
							<td>E</td>
							<td>A</td>
							<td>H</td>
						</tr>
						@foreach($vegies as $key => $vegie)
						<tr>
							<td><a href="/legumes/delete/{{ $vegie->id }}">suppr</a></td>
							<td>{{ $vegie->name }}</td>
							<td>{{ $vegiesSeasons[$key][0] }}</td>
							<td>{{ $vegiesSeasons[$key][1] }}</td>
							<td>{{ $vegiesSeasons[$key][2] }}</td>
							<td>{{ $vegiesSeasons[$key][3] }}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection