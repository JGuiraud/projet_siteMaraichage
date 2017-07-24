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
    	$vegiesSeasons = [];
    	$seasonsTable = ['sp', 'su', 'au', 'wi'];	
    	foreach ($vegies as $key => $vegie) {
    		$j=0;
    		for($i = 0; $i < count($seasonsTable); $i++){
    			if(count($vegie->seasons)>$j){	
    				if($seasonsTable[$i] !== $vegie->seasons[$j]->slug){
    					$vegiesSeasons[$key][$i]='-';
    				}else{
    					$vegiesSeasons[$key][$i]='X';
    					$j++;
    				}
    			}else{
    				$vegiesSeasons[$key][$i]='-';
    			}
    		}
    	}
    	return view('vegies', compact('vegies', 'vegiesSeasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $vegie = new Vegetable;
        $vegie->name = $request->input('name');
        if($request->input('sp') == 'on'){
        	$season = Season::where('slug', 'sp')->first();
        	$season->vegetables()->save($vegie);
        	// $vegie->seasons()->sync(Season::where('slug', 'sp')->first());
        }
        if($request->input('su') == 'on'){
        	$season = Season::where('slug', 'su')->first();
        	$season->vegetables()->save($vegie);
        	// $vegie->seasons()->sync(Season::where('slug', 'su')->first());
        }
        if($request->input('au') == 'on'){
        	$season = Season::where('slug', 'au')->first();
        	$season->vegetables()->save($vegie);
        	// $vegie->seasons()->sync(Season::where('slug', 'au')->first());
        }
        if($request->input('wi') == 'on'){
        	$season = Season::where('slug', 'wi')->first();
        	$season->vegetables()->save($vegie);
        	// $vegie->seasons()->sync(Season::where('slug', 'wi')->first());
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
