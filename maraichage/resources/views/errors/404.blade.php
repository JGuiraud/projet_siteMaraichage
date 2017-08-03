@extends('layouts.landingPage')
@section('css')
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- <div class="container">
    <div class="jumbotron">
    </div>
    <div class="text">
        <i class="fa fa-exclamation-circle fa-2x" aria-hidden="true">
            <h1>Erreur 404: page non trouvée</h1>
        </i>
    </div>
</div> -->

<div class="page404">
        <div class="text404 col-sm-3">
            <div class="text">page non trouvée</div>
    </div>
    <div class="bgImg col-sm-6 col-sm-offset-1">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
    </div>
    <div class="text404 col-sm-3 col-sm-offset-11">
            <div class="text">erreur 404</div>
    </div>
</div>


@endsection
