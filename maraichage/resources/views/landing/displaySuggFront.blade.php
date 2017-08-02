    <link href="{{ asset('css/suggestionsFront.css') }}" rel="stylesheet">

<div class="suggestionPage container">
    <div class="basket col-sm-3">
        <i class="fa fa-cutlery fa-5x" aria-hidden="true"></i>
    </div>
    <div class="recipe col-sm-9">
        <div id="mini_title">Recette du moment / </div>
        <div class="title_recipe">{{$title_recipe}}</div>
        <div class="container_ingredients">
            <div class="ingredients garden_ingredients col-sm-12">
                <div class="title_ingredients">Panier du Maraîcher</div>|
                    @foreach($vegies as $vegie)
                        <span>{{ $vegie }}</span> |
                    @endforeach
            </div>
            <div class="ingredients extra_ingredients col-sm-12">
                <div class="title_ingredients">Ingrédients Supplémentaires</div>|
                    @foreach($ingredients as $ingredient)
                        {{ $ingredient }} |
                    @endforeach
            </div>
        </div>
        <div class="text_recipe">
            <div class="title_preparation">préparations</div>
            <p>{!! $recipe_text !!}</p>
        </div>
        <div class="commentaire_recipe">
            <div class="title_comment"><i class="fa fa-info" aria-hidden="true"></i>  Le mot du Maraîcher</div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti reiciendis temporibus tenetur! Saepe quis, cupiditate reprehenderit ipsum consequatur id voluptatem, omnis deserunt magnam animi, corrupti?
            </p>
        </div>
    </div>
</div>

