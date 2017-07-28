@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="retour">
                <a href="/admin" class="btn btn-danger"><i class="fa fa-backward" aria-hidden="true"></i>
                Retour Menu</a>
            </div>
			<h3>Suggestions</h3>

            <div class="panel panel-default">
                <div class="panel-heading">
coucou1
                </div>
                <div class="panel-body">
                {{-- @foreach($nonMatchingVegies as $vegiesTab)
                <div>{{ $vegiesTab }}</div>
                @endforeach --}}

                    <br>
                </div>
                <div class="panel-footer">

                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@endsection
