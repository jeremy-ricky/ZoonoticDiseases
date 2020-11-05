<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outil;
use App\Http\Requests\FormOutilRequest;
class ControllerOutil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Outils = Outil::whereEtat(0)->get();
        return view('Outils.index', compact('Outils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $Outil = new Outil;
        return view('Outils.create', compact('Outil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormOutilRequest $request)
    {
        Outil::create([
            'Nom'=>$request->Nom,
            'Description'=>$request->Description
        ]);

        session()->flash('message', 'Enregistrement avec succes');
        return redirect(route('Outils.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Outils.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Outils.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormOutilRequest $request, $id)
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
