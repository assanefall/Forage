<?php

namespace App\Http\Controllers;

use App\Administrateur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('administrateurs.index');
    }
    public function list(Request $request)
{
    $administrateur=Administrateur::get()->load('user');
    return Datatables::of($administrateur)->make(true);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $administrateur=Administrateur::get();
        return view('administrateurs.create',compact('administrateur'));
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
     * @param  \AppAdministrateur $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show(administrateur $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \AppAdministrateur $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit(administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \AppAdministrateur $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, administrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \AppAdministrateur $administrateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(administrateur $administrateur)
    {
        
        $message = $administrateur->user->firstname.''.$administrateur->user->name. 'suppression réussie';
        // return $administrateur;
        $administrateur->delete();

        return redirect()->route('administrateurs.index')->with(compact('message'));
    }
}
