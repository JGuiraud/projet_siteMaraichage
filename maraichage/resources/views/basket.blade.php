@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Recherche</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="control-label col-sm-2" for="searchVegie">Nom</label>
							<div class="col-sm-10">
								<input id="searchVegie" type="text" name="name" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="title">Saison(s)</label>
							<div class="col-xs-offset-1">
								<label class="checkbox-inline">
									<input name="sp" type="checkbox" id="sp"> Printemps
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
						<div id="basketReceiver"></div>
					</form>
					<button class="btn btn-success">valider panier</button>
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
					<button class="btn btn-secondary vegie" name="{{ $vegie->name }}">{{ $vegie->name }}</button>

					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
<script>

	if(localStorage.getItem('vegiesTabl')){
		var vegiesTabl = JSON.parse(localStorage.getItem('vegiesTabl'));
		vegiesTabl.forEach(function(a){
			$('#basketReceiver').append('<span id="'+ a +'"><span>X </span>'+ a +'</span><span>, ');
		})
	}else{
		var vegiesTabl = [];
		console.log(vegiesTabl);
		localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
	}

	$('.vegie').on('click', function(){
		// console.log($(this).attr('sp'));
		// console.log($(this).attr('su'));
		// console.log($(this).attr('au'));
		// console.log($(this).attr('wi'));
		var name = $(this).attr('name');
		if(vegiesTabl.includes(name)){
			vegiesTabl.splice(vegiesTabl.indexOf(name), 1);
		}else{
			vegiesTabl.push(name);
		}
		$('#basketReceiver').html('');
		vegiesTabl.forEach(function(a){
			$('#basketReceiver').append('<span id="'+ a +'"><span>X </span>'+ a +'</span><span>, ')
		})
		localStorage.setItem('vegiesTabl', JSON.stringify(vegiesTabl));
		checkLight();
	})

	function checkLight(){
		$('.vegie').each(function(){
			if(vegiesTabl.includes($(this).attr('name'))){
				$(this).attr('class', 'vegie btn btn-success');
			}else{
				$(this).attr('class', 'vegie btn btn-secondary');
			}
		})
	}checkLight();

	function vegieSearch(str){
		$('.vegie').each(function(){
			if(!$(this).attr('name').includes(str)){
				$(this).hide();
			}else{
				$(this).show();
			}

		})
	}
	function checkedSeasons(){
		var checked_seasons = [];
		$('.checkbox-inline').each(function(){
			if($(this).children().is(':checked')){
				checked_seasons.push($(this).children().attr('name'));
			}
		})
		return [checked_seasons];
	}

	$('#searchVegie').on('keyup', function(){
		vegieSearch($(this).val());
	})

	$('.checkbox-inline').on('click',function(){
		var checked_seasons = checkedSeasons();
		console.log(checked_seasons)

	})

</script>
@endsection


@section('css')
<style>
	.vegie{
		margin-bottom: 3px;
	}
</style>
@endsection