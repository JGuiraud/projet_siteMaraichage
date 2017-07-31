@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/stand.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="hidden" hidden>
    @foreach ($markets as $market)
        <input class="market_id" hidden>{{ $market->id }} />
        <input class="market_city" hidden>{{ $market->city }} />
        <input class="market_latitude" hidden>{{ $market->latitude }} />
        <input class="market_longitude" hidden>{{ $market->longitude }} />
        <input class="market_details" hidden>{{ $market->details }} />
    @endforeach
    </div>
    <div id="map">
    </div>
</div>
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7EtFbAhBZWZMCI_9OaOpLNPkjVRcKlGU&libraries=places&callback=initMap" async defer></script>
    <script src="{{ asset('js/map.js') }}"></script>
@endsection