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
    public function create()
    {
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
        return Redirect('/recettes');
        // $recipes = Recipe::All();
        // return view('listRecipes', compact('recipes'));
        // $this->getRecipes($request);
        // return view('listRecipes');
        // getRecipes();
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
