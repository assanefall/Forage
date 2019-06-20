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
    $administrateurs=Administrateur::get()->load('user');
    return Datatables::of($administrateurs)->make(true);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $administrateurs=Administrateur::get();
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
     * @param  \AppAdministrateur $administrateurs
     * @return \Illuminate\Http\Response
     */
    public function show(compteur $compteurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \AppAdministrateur $administrateurs
     * @return \Illuminate\Http\Response
     */
    public function edit(administrateurs $administrateurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \AppAdministrateur $administrateurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, administrateurs $administrateurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \AppAdministrateur $administrateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(administrateurs $administrateurs)
    {
        //
    }
}
