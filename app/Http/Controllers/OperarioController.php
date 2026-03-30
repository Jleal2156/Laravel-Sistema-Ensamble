<?php

namespace App\Http\Controllers;

use App\Models\Operario;
use Illuminate\Http\Request;

class OperarioController extends Controller
{
    public function index(){
        $operarios = Operario::all();
        return view('operarios.index', compact('operarios'));
    }

    public function create(){
        return view('operarios.create');
    }

    public function store(Request $request){
        Operario::create($request->all());
        return redirect('/operarios');
    }

    public function edit(Operario $operario){
        return view('operarios.edit', compact('operario'));
    }

    public function update(Request $request, Operario $operario){
        $operario->update($request->all());
        return redirect('/operarios');
    }

    public function destroy(Operario $operario){
        $operario->delete();
        return redirect('/operarios');
    }
}
