<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revenda;
use App\http\Requests\RevendaRequest;
class RevendasController extends Controller
{
    public function index (){
     $revendas = Revenda::orderBy('nome')->paginate(5);
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
    public function edit($id){
        $revenda = Revenda::find($id);
        return view('revendas.edit', compact('revenda'));
    }

    public function update(RevendaRequest $request, $id){
        Revenda::find($id)->update($request->all());
        return redirect()->route('revendas');
    }
}
