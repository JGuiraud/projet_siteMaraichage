<div>panier</div>
<div>
    <ul>
    @foreach($vegies as $vegie)
        <li>{{ $vegie }}</li>
    @endforeach
    </ul>
</div>
<div>
<div>recette</div>
<div>
    <ul>Les ingrédients du maraicher :
    @foreach($vegies as $vegie)
        <li>{{ $vegie }}</li>
    @endforeach
    Les ingrédients supplémentaires :
    @foreach($ingredients as $ingredient)
        <li>{{ $ingredient }}</li>
    @endforeach
    </ul>
    <p>{!! $recipe_text !!}</p>
</div>
</div>
