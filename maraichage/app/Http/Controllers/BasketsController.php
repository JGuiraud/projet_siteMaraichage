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
                if (!in_array($vegie, $recette)) {
                    $nonMatchingVegies [] = $vegie;
                } else {
                    unset($recetteTemp[array_search($vegie, $recetteTemp)]);
                    $matchingVegies [] = $vegie;
                }
            }

            if (count($matchingVegies) < 1) {
                $matchingVegies = null;
            }
            if (count($nonMatchingVegies) < 1) {
                $nonMatchingVegies = null;
            }

            $result = [
                'id' => $recipes[$key]->id,
                'name' => $recipes[$key]->title,
                'recipe' => $recette,
                'basket' => $sortedBasketVegies,
                'missingVegiesForRecipe' => $recetteTemp,
                'matching' => $matchingVegies,
                'nonMatching' => $nonMatchingVegies
            ];
            if (count($matchingVegies) === count($recette)) {
                $bestOnes[]=$result;
            } elseif (count($matchingVegies) === count($sortedBasketVegies) && count($recette) > count($sortedBasketVegies) && count($nonMatchingVegies) < 1) {
                $goodOnes [] = $result;
            } else {
                $junk [] = $result;
            }
            // FIN
        }


        uasort($junk, function ($a, $b) {
            if ($a['matching'] == $b['matching']) {
                return 0;
            }
            return ($a['matching'] > $b['matching']) ? -1 : 1;
        });
        // dd($bestOnes, $goodOnes, $junk);

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
