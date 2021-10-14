<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;
use App\http\Requests\ModeloRequest;

class ModelosController extends Controller
{
    public function index (Request $filtro){
        $filtragem = $filtro->get('desc_filtro');
           if ($filtragem == null)
               $modelos = Modelo::orderBy('descricao')->paginate(4);
           else
               $modelos = Modelo::where('descricao','like','%'.$filtragem.'%')
                   ->orderBy("descricao")
                   ->paginate(3)
                   ->setpath('modelos?desc_filtro='.$filtragem);
                   return view('modelos.index', ['modelos'=>$modelos]);
    }
    public function create (){
        return view('modelos.create');
    }
    public function store (ModeloRequest $request){
        $novo_modelo = $request->all();
        Modelo::create($novo_modelo);
        return redirect()->route('modelos');

    }
    public function destroy($id){
        Modelo::find($id)->delete();
        return redirect()->route('modelos');
    }
    public function edit($id){
        $modelo = Modelo::find($id);
        return view('modelos.edit', compact('modelo'));
    }

    public function update(ModeloRequest $request, $id){
        Modelo::find($id)->update($request->all());
        return redirect()->route('modelos');
    }
}
