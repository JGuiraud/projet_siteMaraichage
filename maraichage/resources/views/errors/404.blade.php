@extends('layouts.landingPage')

@section('css')
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <h1>Erreur 404: page non trouvée</h1>
    </div>
@endsection
