<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poisson;
use App\Http\Requests\FormPoissonRequest;

class ControllerPoisson extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Poissons = Poisson::whereEtat(0)->get();
        return view('Poissons.index', compact('Poissons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Poissons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormPoissonRequest $request)
    {
        Poisson::create([
            'Nom'=>$request->Nom, 
            'Espece_id'=>$request->Espece, 
            'Nom_locaux'=>$request->nomLocaux,
            'Aspect'=>$request->Aspect,
            'Couleur'=>$request->Couleur,
            'Taille'=>$request->Taille,
            'Description'=>$request->Description,
            'Picture'=>$request->Picture
        ]);
        session()->flash('message', 'Enregistrement avec succes');
        return redirect(route('Poissons.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Poissons.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Poissons.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormPoissonRequest $request, $id)
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
