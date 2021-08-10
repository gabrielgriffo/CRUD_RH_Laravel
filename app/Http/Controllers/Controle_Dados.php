<?php

namespace App\Http\Controllers;

use App\Models\Linguage;
use Illuminate\Http\Request;

class Controle_Dados extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \App\Models\Linguage::all();
        
    }
    public function store(Request $request)
    {
        return \App\Models\Linguage::create($request->all());

    }

    public function show($id)
    {
        $record = \App\Models\Linguage::find($id);
        return response()->json($record);

    }

    public function update(Request $request, $id)
    {
        $linguagem = \App\Models\Linguage::find($id);
        $linguagem->fill($request->all());
        $linguagem->save();
        return $linguagem;
    }

    public function destroy($id)
    {
        \App\Models\Linguage::destroy($id);
    }
}
