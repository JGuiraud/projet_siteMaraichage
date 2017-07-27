<?php

namespace App\Http\Controllers;

use App\Recipe;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



        $nbIngredients = intval($request->input('nbIngredients'));
        $nbExtraingredients = intval($request->input('nbExtraingredients'));
        // on récupère le nombre d'ingrédients et d'extra-ingrédients présents dans la recette
        $ingredients = [];
        $quantity = [];
        // on prépare des tableaux vides pour mettre, les ingrédients et leurs quantités respectives
        for ($i=1; $i<=$nbIngredients; $i++) {
            $ingredients[] = $request->input('ingredient'.$i);
            $quantity[] = $request->input('quantity'.$i);
        }
        // on rempli les tableaux avec les donnée qui porte les attributs name ingredient1, ingredient2, ingredient3.. etc de même pour les quantités 

        $extraIngredients = [];
        $extraQuantity = [];
        // on prépare des tableaux vides pour mettre, les extra-ingrédients et leurs quantités respectives
        for ($y=1; $y<=$nbExtraingredients; $y++) {
            if ($request->input('extraIngredient'.$y)) {
                $extraIngredients[] = $request->input('extraIngredient'.$y);
                if (!$request->input('extraQuantity'.$y)) {
                    $extraQuantity[] = 'N/A';
                } else {
                    $extraQuantity[] = $request->input('extraQuantity'.$y);
                }
            }
        }
        $descriptionRecipe = $request->input('description');
        // on récupère le contenu du block de text de la recette
        $output = preg_replace("/\r\n|\r|\n/", '<br/>', $descriptionRecipe);
        // on lui retire les caractères non compréhensible par la bdd

        $newRecipe = new Recipe;
        //on créé une nouvelle recette vide
        $newRecipe->title = $request->input('title');
        $newRecipe->vegetables_names = json_encode($ingredients);
        $newRecipe->vegetables_quantity = json_encode($quantity);
        $newRecipe->ingredients = json_encode($extraIngredients);
        $newRecipe->ingredients_quantity = json_encode($extraQuantity);
        $newRecipe->recipe_text = $output;
        //on lui passe toutes les caractéristique qu'on viens de réunir

        $newRecipe->save();
        // on la save pour la concerver en bdd.
        return Redirect('/recettes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::all()->where('id', '=', $id)->first();
        $recipe->delete();
        return Redirect('/recettes');
    }

    public function details($id)
    {
        $recipe = Recipe::All()->where("id", "=", $id)->first();
        $vegies = json_decode($recipe->vegetables_names);
        $vegies_quantities = json_decode($recipe->vegetables_quantity);
        $ingredients = json_decode($recipe->ingredients);
        $ingredients_quantities = json_decode($recipe->ingredients_quantity);
        $recipe_text = html_entity_decode($recipe->recipe_text);

        return view('detailRecipe',
        ['recipe'=>$recipe,
        'vegies'=>$vegies,
        'vegies_quantities'=>$vegies_quantities,
        'ingredients'=>$ingredients,
        'ingredients_quantities'=>$ingredients_quantities,
        'recipe_text'=>$recipe_text,
        ]);
    }

    public function newRecipePart1()
    {
        return view('newRecipePart1');
    }
    public function newRecipePart2()
    {
        return view('newRecipePart2');
    }

    public function getRecipes(Request $request)
    {
        $recipes = Recipe::All();
        // dd($recipes);
        // $allRecipes = [];
        // foreach ($recipes as $recipe) {
        //     $allRecipes = $recipe['attributes'];
        // }
        // dd($allRecipes);
        return view('listRecipes', compact('recipes'));
    }
}
