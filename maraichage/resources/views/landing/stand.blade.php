

    <link href="{{ asset('css/stand.css') }}" rel="stylesheet">


<div class="container">
    <table hidden>
        <tbody>
              @foreach ($markets as $market)
            <tr>
                <td class="market_id" hidden>{{ $market->id }}</td>
                <td class="market_city">{{ $market->city }}</td>
                <td class="market_latitude" hidden>{{ $market->latitude }}</td>
                <td class="market_longitude" hidden>{{ $market->longitude }}</td>
                <td class="market_details" hidden>{{ $market->details }}</td>
            </tr>
            @endforeach
            </tbody>
    </table>
    <div id="map">
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7EtFbAhBZWZMCI_9OaOpLNPkjVRcKlGU" async defer></script>
     <script src="{{ asset('js/stand.js') }}"></script>
