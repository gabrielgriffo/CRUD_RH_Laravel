<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VagasController extends Controller
{
    
    public function index()
    {
        return \App\Models\Vaga::all();
        
    }
    
    public function store(Request $request)
    {
        return \App\Models\Vaga::create($request->all());
    }
    
    public function show($id)
    {
        $record = \App\Models\Vaga::find($id);
        return response()->json($record);
    }
    
    
    public function update(Request $request, $id)
    {
        $vaga = \App\Models\Vaga::find($id);
        $vaga->fill($request->all());
        $vaga->save();
        return $vaga;
    }

    public function destroy($id)
    {
        \App\Models\Vaga::destroy($id);
    }
}
