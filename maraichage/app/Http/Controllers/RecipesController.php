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
        $ingredients = [];
        $quantity = [];
        for ($i=1; $i<=$nbIngredients; $i++) {
            $ingredients[] = $request->input('ingredient'.$i);
            $quantity[] = $request->input('quantity'.$i);
        }
        $extraIngredients = [];
        $extraQuantity = [];
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
        $output = preg_replace("/\r\n|\r|\n/", '<br/>', $descriptionRecipe);

        $newRecipe = new Recipe;
        $newRecipe->title = $request->input('title');
        $newRecipe->vegetables_names = json_encode($ingredients);
        $newRecipe->vegetables_quantity = json_encode($quantity);
        $newRecipe->ingredients = json_encode($extraIngredients);
        $newRecipe->ingredients_quantity = json_encode($extraQuantity);
        $newRecipe->recipe_text = $output;

        // dd($newRecipe);
        $newRecipe->save();
        return Redirect('/recettes');

        // dd($ingredients, $quantity, $extraIngredients, $extraQuantity, $output);
        // $newRecipe->title = $request->input('title');
        //
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
