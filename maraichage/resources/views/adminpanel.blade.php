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
                    <a href="/legumes" class="action">
                        <div class="facontainer"><i class="fa fa-leaf fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="textmenu"><span>VOIR MES LÉGUMES</span></div>
                    </a>
                    <a href="/recettes" class="action">
                        <div class="facontainer"><i class="fa fa-book fa-2x" aria-hidden="true"></i></div>
                        <div class="textmenu"><span>VOIR MES RECETTES</span></div>
                    </a>
                    <a href="/selectionPanier" class="action">
                        <div class="facontainer"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="textmenu"><span>IMPRIMER RECETTES</span></div>
                    </a>
                    <a href="/marches" class="action">
                        <div class="facontainer"><i class="fa fa-map fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="textmenu"><span>MES MARCHÉS</span></div>
                    </a>
                    <a href="/index" target="_blank" class="">
                        <i class="fa fa-eye fa-5x eye" aria-hidden="true"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
