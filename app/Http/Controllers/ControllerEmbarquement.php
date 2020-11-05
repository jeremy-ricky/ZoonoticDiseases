<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campagne;
use App\Models\Embarquement;
use App\Http\Requests\FormEmbarquementRequest;
class ControllerEmbarquement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Embarquements = Embarquement::whereEtat(0)->get();
        return view('Embarquements.index', compact('Embarquements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $Embarquement = Embarquement::whereEtat(0)->get();
        return view('Embarquements.create', compact('Embarquement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormEmbarquementRequest $request)
    {
        Embarquement::create([
            'Campagne_id'=>$request->Campagne,
            'Port_id'=>$request->Port,
            'Heure_embarquement'=>$request->HeureE,
            'Date_embarquement'=>$request->DateE
        ]);

        session()->flash('message', 'Enregistrement avec succes');
        return redirect(route('Embarquements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Embarquements.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Embarquements.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormEmbarquementRequest $request, $id)
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
