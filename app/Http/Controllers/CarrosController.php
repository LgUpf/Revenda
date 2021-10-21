<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\http\Requests\CarroRequest;
class CarrosController extends Controller
{
    public function index (Request $filtro){
        $filtragem = $filtro->get('desc_filtro');
       if ($filtragem == null)
           $carros = Carro::orderBy('modelo_id')->paginate(3);
       else
           $carros = Carro::where('modelo_id','like','%'.$filtragem.'%')
               ->orderBy("modelo_id")
               ->paginate(3)
               ->setpath('carros?desc_filtro='.$filtragem);
     return view('carros.index', ['carros'=>$carros]);
    }
    public function create (){
        return view('carros.create');
    }
    public function store (CarroRequest $request){
        $novo_carro = $request->all();
        Carro::create($novo_carro);
        return redirect()->route('carros');

    }
    public function destroy($id){
        try {
		    Carro::find($id)->delete();
			$ret = array('status'=>200, 'msg'=>"null");
		} catch (\Illuminate\Database\QueryException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		catch (\PDOException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		return $ret;
    }
    public function edit($id){
        $carro = Carro::find($id);
        return view('carros.edit', compact('carro'));
    }

    public function update(CarroRequest $request, $id){
        Carro::find($id)->update($request->all());
        return redirect()->route('carros');
    }
}
