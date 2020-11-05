<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgentRessencement;
use App\Http\Requests\FormAgentRessencementRequest;
class ControllerAgentRessencement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $AgentRessencements = AgentRessencement::whereEtat(0)->get();
        return view('AgentRessencements.index', compact('AgentRessencements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $Agent = New AgentRessencement;
        return view('AgentRessencements.create', compact('Agent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormAgentRessencementRequest $request)
    {
        if (AgentRessencement::UniqueEmail($request->Email)==false) {
            
            if (AgentRessencement::UniqueTelephone($request->Email)==false) {
                
                AgentRessencement::create([
                    'Nom'=>$request->Nom,
                    'Email'=>$request->Email,
                    'Telephone'=>$request->Telephone,
                    'Sexe'=>$request->Sexe
                ]);
                 session()->flash('message', 'Enregistrement avec succes');
                 return redirect(route('AgentRessencements.index'));
            }else{
                 session()->flash('messageDelete', 'Un seul Client doit etre mis par defaut!');
                 return redirect(route('AgentRessencements.create'));
            }
             session()->flash('message', 'Un seul Client doit etre mis par defaut!');
             return redirect(route('AgentRessencements.index'));
        }else{
            session()->flash('messageDelete', 'Un seul Client doit etre mis par defaut!');
            return redirect(route('AgentRessencements.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('AgentRessencements.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('AgentRessencements.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormAgentRessencementRequest $request, $id)
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
