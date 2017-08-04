<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vegetable;
use App\Season;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $vegies = Vegetable::all();
        return view('vegies', compact('vegies'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectBasket()
    {
        $button = true;
        $vegies = Vegetable::all();
        $vegiesSeasons = [];
        $seasonsTable = ['sp', 'su', 'au', 'wi'];
        foreach ($vegies as $key => $vegie) {
            $j=0;
            for ($i = 0; $i < count($seasonsTable); $i++) {
                if (count($vegie->seasons)>$j) {
                    if ($seasonsTable[$i] !== $vegie->seasons[$j]->slug) {
                        $vegiesSeasons[$key][$i]=0;
                    } else {
                        $vegiesSeasons[$key][$i]=1;
                        $j++;
                    }
                } else {
                    $vegiesSeasons[$key][$i]=0;
                }
            }
        }
        return view('basket', compact('vegies', 'vegiesSeasons', 'button'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // an moment du submit
        $vegie = new Vegetable;
        // création d'un nouveau légume au format de celui de la bdd grace au combo 'laravef									<input name="season[su]" type="checkbox" id="su"> Étél et eloquent' (vide pour l'instant)
        $vegie->name = ucfirst($request->input('name'));
        // dd($request);
        // on met dans ce légume a la valeur 'name' le contenu de l'input donc l'attribut name est 'name'
        if ($request->input('season')) {
            foreach ($request->input('season') as $key => $value) {
                $season = Season::where('slug', $key)->first();
                $season->vegetables()->save($vegie);
            }
        }
        $vegie->save();
        return redirect('legumes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vegie = Vegetable::all()->where('id', '=', $id)->first();
        $vegie->seasons()->detach();
        $vegie->delete();
        return redirect('legumes');
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
}
