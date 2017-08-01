@extends('layouts.app')

@section('css')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">panier</div>
                <div class="panel-body">
                    <ul>
                    @foreach($vegies as $vegie)
                        <li>{{ $vegie }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">recette</div>
                <div class="panel-body">
                    <ul>
                    @foreach($vegies as $vegie)
                        <li>{{ $vegie }}</li>
                    @endforeach
                    @foreach($ingredients as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                    </ul>
                    <p>{!! $recipe_text !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
