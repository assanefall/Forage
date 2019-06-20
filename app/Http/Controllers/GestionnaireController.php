<?php

namespace App\Http\Controllers;

use App\Gestionnaire;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class GestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('gestionnaires.index');
    }
    public function list(Request $request)
{
    $gestionnaires=Gestionnaire::get()->load('user');
    return Datatables::of($gestionnaires)->make(true);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $gestionnaires=Gestionnaire::get();
        return view('gestionnaires.create',compact('agent'));
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
     * @param  \App\Gestionnaire  $gestionnaires
     * @return \Illuminate\Http\Response
     */
    public function show(gestionnaire $gestionnaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestionnaire  $gestionnaires
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestionnaire $gestionnaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestionnaire  $gestionnaires
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestionnaire $gestionnaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestionnaire  $gestionnaires
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestionnaire $gestionnaires)
    {
        //
    }
}
