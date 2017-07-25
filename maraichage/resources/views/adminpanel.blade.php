@extends('layouts.app')

@section('css')
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="containerAdmin">
            <div class="panel panel-default">
                <div class="panel-body adminpanel">
                    <div class="action">
                        <div class="facontainer"><i class="fa fa-leaf fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="textmenu"><span>MES LÉGUMES</span></div>
                    </div>
                    <a href="/recettes" class="action">
                        <div class="facontainer"><i class="fa fa-book fa-2x" aria-hidden="true"></i></div>
                        <div class="textmenu"><span>MES RECETTES</span></div>
                    </a>
                    <div class="action">
                        <div class="facontainer"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="textmenu"><span>PANIER & RECETTE</span></div>
                    </div>
                    <div class="action">
                        <div class="facontainer"><i class="fa fa-map fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="textmenu"><span>MES MARCHÉS</span></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
