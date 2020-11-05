<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ressencement;
use App\Models\AgentRessencement;
use App\Models\Campagne;
use App\Http\Requests\FormRecessementRequest;
class ControllerRessencement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Ressencements = Ressencement::whereEtat(0)->get();
        return view('Recessements.index', compact('Ressencements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $AgentRessencements = AgentRessencement::whereEtat(0)->get();
        $Recessement = new Ressencement;
        return view('Recessements.create', compact('Recessement', 'AgentRessencements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRecessementRequest $request)
    {
        Ressencement::create([
            'Poisson_id'=>$request->Poisson,
            'Agent_id'=>$request->Agent,
            'Campagne_id'=>$request->Campagne,
            'Quantite'=>$request->Quantite,
            'Date_ressencement'=>$request->DateR,
            'Quota'=>$request->Quota
        ]);
        session()->flash('message', 'Un seul Client doit etre mis par defaut!');
        return redirect(route('Ressencements.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Recessements.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Recessements.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormRecessementRequest $request, $id)
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
