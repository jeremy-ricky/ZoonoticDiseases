<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espece;
use App\Http\Requests\FormEspeceRequest;
class ControllerEspece extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Especes = Espece::whereEtat(0)->get();
        return view('Especes.index', compact('Especes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $Espece = new Espece;
        return view('Especes.create', compact('Espece'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormEspeceRequest $request)
    {   
        Espece::create([
            'Caracteristique_distinctifs'=>$request->Caracteristique,
            'Taille'=>$request->Taille,
            'Habitat'=>$request->Habitat,
            'Nutrition'=>$request->Nutrition,
            'Comportement'=>$request->Comportement,
            'Notes'=>$request->Note,
            'Nom'=>$request->Nom,
            'Picture'=>$request->Picture,
            'Nom'=>$request->Nom
        ]);
        session()->flash('message', 'Un seul Client doit etre mis par defaut!');
        return redirect(route('Especes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
