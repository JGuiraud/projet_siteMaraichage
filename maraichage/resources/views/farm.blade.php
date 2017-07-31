@extends('layouts.app') @section('css')
<link href="{{ asset('css/farm.css') }}" rel="stylesheet"> @endsection @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- <a href="#" class="thumbnail"> -->
            <img src="https://unsplash.it/350" alt="">
            <!-- </a> -->
        </div>
        <div class="col-md-6">
            <p>Bienvenue aux Jardins de Riton !<br> Passionné de potager depuis quelques années, j’ai décidé en 2018 d’en faire mon métier : devenir maraîcher !<br> Variété ancienne, agro écologie, pratique du sol vivant, mon exploitation certifiée Agriculture
                Biologique vous propose des produits savoureux pour enchanter vos repas quotidiens !<br> Afin de profiter au mieux de ces produits de qualité, je vous propose des recettes simples et efficaces qui conviendront aux débutants comme aux cuisiniers
                avertis !
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" >
            <div id="instafeed"></div>
            <!-- <div class="panel panel-default">
                <div class="panel-heading">Mon exploitation</div>
                <div class="panel-body">
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection @section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script src="{{ asset('js/farm.js') }}"></script>
@endsection