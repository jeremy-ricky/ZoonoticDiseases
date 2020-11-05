<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Debarquement;
use App\Http\Requests\FormDebarquementRequest;

class ControllerDebarquement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Debarquements = Debarquement::whereEtat(0)->get();
        return view('Debarquements.index', compact('Debarquements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Debarquements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormDebarquementRequest $request)
    {
        Debarquement::create([
            'Embarquement_id'=>$request->Embarqm, 
            'Date_debarquement'=>$request->dateDebarqm,
            'Heure_debarquement'=>$request->heureDebarqm, 
            'Port_id'=>$request->Port
        ]);
        session()->flash('message', 'Enregistrement avec succes');
        return redirect(route('Debarquements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Debarquements.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Debarquements.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormDebarquementRequest $request, $id)
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
