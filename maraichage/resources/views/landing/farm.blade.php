<link href="{{ asset('css/farm.css') }}" rel="stylesheet">

<div class="containerPage">
<h3>Bienvenue aux Jardins de Riton !</h3>
    <div class="imgAndText">
                <img class="imgExploit" src="{{ asset('img/vegetables-2514905_1920.jpg') }}" alt="">
                <p>Passionné de potager depuis quelques années, j’ai décidé en 2018 d’en faire mon métier : devenir maraîcher !<br> Variété ancienne, agro écologie, pratique du sol vivant, mon exploitation certifiée Agriculture
                    Biologique vous propose des produits savoureux pour enchanter vos repas quotidiens !<br> Afin de profiter au mieux de ces produits de qualité, je vous propose des recettes simples et efficaces qui conviendront aux débutants comme aux cuisiniers
                    avertis !
                </p>
    </div>
        <div class="col-sm-12 instaContainer" >
            <h4 style="text-align: center">Nous retrouver sur Instagram</h4>
            <div id="instafeed"></div>
        </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script src="{{ asset('js/farm.js') }}"></script>