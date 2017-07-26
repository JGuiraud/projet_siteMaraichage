<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Market;

class MarketsController extends Controller
{
/**
**Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        return view('markets');
    }

/**
**Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
    public function create()
    {
        //
    }

/**
**Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        //
    }


/**
**Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function show($id)
    {
        //
    }

/**
**Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function edit($id)
    {
        //
    }

/**
**Update the specified resource in storage.
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
**Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function destroy($id)
    {
        return Redirect('/marches');
    }

    public function getMarket(Request $request)
    {
        $markets = Market::All();
        return view('markets', ['markets'=>$markets]);
    }

    public function createMarket(Request $request)
    {
        $form = new Market;
        $form->city=$request->input('city_bdd');
        $form->latitude=$request->input('latitude');
        $form->longitude=$request->input('longitude');
        $form->details=$request->input('details');
        $form->save();
        return Redirect('/marches');
    }

    public function destroyMarket($id)
    {
        $market = Market::all()->where('id', '=', $id)->first();
        $market->delete();
        return Redirect('/marches');
    }
}
