<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revenda;
use App\http\Requests\RevendaRequest;
class RevendasController extends Controller
{
    public function index (Request $filtro){
        $filtragem = $filtro->get('desc_filtro');
           if ($filtragem == null)
               $revendas = Revenda::orderBy('nome')->paginate(4);
           else
               $revendas = Revenda::where('nome','like','%'.$filtragem.'%')
                   ->orderBy("nome")
                   ->paginate(3)
                   ->setpath('revendas?desc_filtro='.$filtragem);
                   return view('revendas.index', ['revendas'=>$revendas]);
    }
    public function create (){
        return view('revendas.create');
    }
    public function store (RevendaRequest $request){
        $nova_revenda = $request->all();
        Revenda::create($nova_revenda);
        return redirect()->route('revendas');

    }
    public function destroy($id){
        Revenda::find($id)->delete();
        return redirect()->route('revendas');
    }
    public function edit(Request $request){
        $revenda = Revenda::find(\Crypt::decrypt($request->get('id')));
        return view('revendas.edit', compact('revenda'));
    }
    public function update(RevendaRequest $request, $id){
        Revenda::find($id)->update($request->all());
        return redirect()->route('revendas');
    }
}
