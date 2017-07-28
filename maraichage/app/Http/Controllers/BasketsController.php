<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class BasketsController extends Controller
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
    public function suggestRecipes(Request $request)
    {
        // Sort of basket in alphabetical order and with new keys associated
        $basketVegies = array_sort($request->vegies, function ($value) {
            return $value;
        });
        $sortedBasketVegies = [];
        foreach ($basketVegies as $vegie) {
            $sortedBasketVegies[] = $vegie;
        }

        // Sort vegies in their respective recipe
        $recipes = Recipe::all();
        $recipesVegies = [];
        for ($i = 0; $i < count($recipes); $i++) {
            $recipeVegies = array_sort(json_decode($recipes[$i]->vegetables_names), function ($value) {
                return $value;
            });
            $recipesVegies[] = $recipeVegies;
        }
        //$basket = [ le panier ]

        $bestOnes = [];
        $goodOnes = [];
        $junk = [];

        foreach ($recipesVegies as $key => $recette) {
            // DEBUT
            $matchingVegies = [];
            $nonMatchingVegies = [];
            $recetteTemp = $recette;
            foreach ($sortedBasketVegies as $vegie) {
                if (!in_array(strtolower($vegie), $recette)) {
                    $nonMatchingVegies [] = $vegie;
                } else {
                    unset($recetteTemp[array_search(strtolower($vegie), $recetteTemp)]);
                    $matchingVegies [] = $vegie;
                }
            }
            if (!$matchingVegies) {
                $matchingVegies = 'none';
            }
            if (!$nonMatchingVegies) {
                $nonMatchingVegies = 'none';
            }
            // dd('recette Temp', $recetteTemp, 'matching', $matchingVegies, 'non matching', $nonMatchingVegies);

            $result = [
                'id' => $recipes[$key]->id,
                'name' => $recipes[$key]->title,
                'manquant pour la recette' => $recetteTemp,
                'matching' => $matchingVegies,
                'non matching' => $nonMatchingVegies
            ];

            if (count($matchingVegies) === count($recette)) {
                $bestOnes[]=$result;
            } else {
                // }esle{
            }
            // FIN
        }dd($bestOnes);

        return view('suggestRecipes', compact('bestOnes', 'goodOnes', 'junk'));
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
        //
    }
}
