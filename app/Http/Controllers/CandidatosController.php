<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    public function index()
    {
        return \App\Models\Candidato::all();
        
    }
    public function store(Request $request)
    {
        return \App\Models\Candidato::create($request->all());
    }

    public function destroy($id)
    {
        \App\Models\Candidato::destroy($id);
    }

    public function show($id)
    {
        $record = \App\Models\Candidato::find($id);
        return response()->json($record);
    }
    
    public function update(Request $request, $id)
    {
        $candidato = \App\Models\Candidato::find($id);
        $candidato->fill($request->all());
        $candidato->save();
        return $candidato;
    }
    

}
