<?php

namespace App\Http\Controllers;

use App\Compteur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class CompteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('compteurs.index');
    }
    public function list(Request $request)
{
    $compteurs=Compteur::with('administrateur.user')->get();
    return Datatables::of($compteurs)->make(true);
}
public function listfree()
{
    $compteurs=Compteur::doesntHave('abonnement')->get();
    return Datatables::of($compteurs)->make(true);
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $compteurs=Compteur::get();
        return view('compteurs.create',compact('compteurs'));
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
     * @param  \App\compteur  $compteurs
     * @return \Illuminate\Http\Response
     */
    public function show(compteur $compteurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\compteur  $compteurs
     * @return \Illuminate\Http\Response
     */
    public function edit(compteur $compteurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\compteur  $compteurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compteur $compteurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\compteurs  $compteurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(compteur $compteurs)
    {
        $message = $compteurs->administrateurs_id.''.$compteurs->numero_serie. 'suppression réussie';
        // return $compteur;
        $compteurs->delete();

        return redirect()->route('compteurs.index')->with(compact('message'));
      
    }
}
