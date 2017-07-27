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
        // on prépare un tableau vide pour y mettre un tableau pour chaque légume avec un booléan pour chaque saison (ex => ce qu'on veut pour 2 légume qui serai respectivement des légumes d'automne et d'hiver pour l'un et d'été et d'automne pour l'autre = [['0', '0', '1', '1'], ['0', '1', '1', '0']])
        $seasonsTable = ['sp', 'su', 'au', 'wi'];
        // pour faire ça on prépare d'un tableau avec les slug dans l'ordre de l'affichage dans vegies.balde.php (spring summer autumn winter) pour stocker les booléans en questions dans cet ordre et les réaficher
        foreach ($vegies as $key => $vegie) {
            // $j est le nombre de saisons qui ont été ajoutées a ce moment dans la boucle (on commence donc a compter ces saisons en partant de 0)
            $j=0;
            for($i = 0; $i < count($seasonsTable); $i++){
                // $vegie étant le légume visé, on utilise la function seasons ($vegie->seasons) crée dans le model Vegetable.php pour trouver toute les saisons liées a ce légume. et pour chacune d'entre elle on aplique le code suivant
                if(count($vegie->seasons)>$j){// a condition qu'il reste des saisons non comptées par $j
                    if($seasonsTable[$i] !== $vegie->seasons[$j]->slug){
                        // si la saisons observée dans $vegie->seasons est differente de la saison a la position observée dans le tableau $seasonsTable on push un 0 dans la position de la saison en question
                        $vegiesSeasons[$key][$i]=0;// $key mennant a la position du légume visé a ce moment
                        // a ce moment pour le premier légume 
                    }else{
                        // au contraire si ce n'est pas la même saison que dans $seasonsTable on push un 1 a la place
                        $vegiesSeasons[$key][$i]=1;
                        //on remarquera le $j (dans la condition au dessus) '$vegie->seasons[$j]->slug' qui permet de n'avancer dans les saisons du légume concerné que si on a trouver une saison dans $seasonsTable et appliquer un 1 a la bonne position, par exemple quand on a $vegie->saisons = ['su', 'au'] pour un légume on veux mettre $vegiesSeasons[0] = ['0', '1', '1', '0'] et donc quand on passe sur 'sp' dans $seasonsTable on stock bien $vegiesSeasons[0] = ['0'] puisqu'il est different de 'su'. Puis la boucle nous ramene ici mais cette fois ci avec $vegie->seasons[$j]->slug qui vaut toujours 'su' (puisqu'on n'est pas passer par le $j++) mais cette fois ci sur le 'su' de $seasonsTable ce qui déclenche ce else et permet de mettre un '1' ($vegiesSeasons[0] = ['0', '1']) et donc $j++ qui vaut alors 1. Puis on passe par le $vegie->seasons[$j]->slug qui vaut alors 'au' et correspond au 'au' qui fait la même chose que le précédent et ajoute encore un '1' on a donc $vegiesSeasons[0] = ['0', '1', '1'] il ne nous manque plus qu'un '0'
                        $j++;
                    }
                }else{// maintenant que $j vaut 2, la condition count($vegie->season)>$j est fausse (puisque dans notre exemple $vegie->saisons = ['su', 'au'] (il ne reste plus de saisons a observer)) on a donc, dans notre cas, plus qu'un zero a ajouter. soit $vegiesSeasons[0] = ['0', '1', '1', '0'] cool?
                    $vegiesSeasons[$key][$i]=0;
                }
            }
        }
        // $vegiesSeasons = [['0', '1', '1', '0']] dans notre exemple mais avec plusieur légumes cela peut donner ça $vegiesSeasons = [['0', '1', '0', '0'], ['1', '1', '0', '0'], ['0', '1', '0', '0'], ['0', '1', '0', '0'], ['0', '1', '0', '0'], ['0', '0', '1', '1']]

        // on peut mieux comprendre tout ça dans la view vegies.blade.php
        return view('vegies', compact('vegies', 'vegiesSeasons'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectBasket()
    {
    	$vegies = Vegetable::all();
    	$vegiesSeasons = [];
    	$seasonsTable = ['sp', 'su', 'au', 'wi'];
    	foreach ($vegies as $key => $vegie) {
    		$j=0;
    		for($i = 0; $i < count($seasonsTable); $i++){
    			if(count($vegie->seasons)>$j){
    				if($seasonsTable[$i] !== $vegie->seasons[$j]->slug){
    					$vegiesSeasons[$key][$i]=0;
    				}else{
    					$vegiesSeasons[$key][$i]=1;
    					$j++;
    				}
    			}else{
    				$vegiesSeasons[$key][$i]=0;
    			}
    		}
    	}
    	return view('basket', compact('vegies', 'vegiesSeasons'));
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
        // création d'un nouveau légume au format de celui de la bdd grace au combo 'laravel et eloquent' (vide pour l'instant)
        $vegie->name = $request->input('name');
        // on met dans ce légume a la valeur 'name' le contenu de l'input donc l'attribut name est 'name'
        if($request->input('sp') == 'on'){
            // a partir d'ici 4 condition successives permete de lier ce légume avec la table seasons (du model Season) par le biais de la table pivot season_vegetable.
        	$season = Season::where('slug', 'sp')->first();
        	$season->vegetables()->save($vegie);
        }
        if($request->input('su') == 'on'){
            // ainsi la même chose est faite sur les autres saisons
        	$season = Season::where('slug', 'su')->first();
        	$season->vegetables()->save($vegie);
        }
        if($request->input('au') == 'on'){
        	$season = Season::where('slug', 'au')->first();
        	$season->vegetables()->save($vegie);
        }
        if($request->input('wi') == 'on'){
        	$season = Season::where('slug', 'wi')->first();
        	$season->vegetables()->save($vegie);
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
