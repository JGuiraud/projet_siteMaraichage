@extends('layouts.landingPage')
@section('css')
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="page404">
    <div class="text404 col-sm-3">
        <div class="text">
            <p>page non trouvée</p>
            <p>erreur 404</p></div>
        </div>
        <div class="bgImg col-sm-6 col-sm-offset-1">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
        </div>
    </div>
</div>

@endsection
