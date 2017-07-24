@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un Légume</div>
                <div class="panel-body">
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
                            <td>suppr</td>
                            <td>Nom</td>
                            <td>P</td>
                            <td>E</td>
                            <td>A</td>
                            <td>H</td>
                        </tr>
                        {{-- ['sp', 'su', 'au', 'wi'] --}}
                        @foreach($vegies as $vegie)
                        <tr>
                            <td>suppr</td>
                            <td>{{ $vegie->name }}</td>
                            @foreach($vegie->seasons as $season)
                                @if( $season->slug )
                                    <td>x</td>
                                @else
                                    <td></td>
                                @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
