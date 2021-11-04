<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendasController extends Controller
{
    public function create() {
        return view('vendas.create');
    }

    public function store(Request $request){
        $venda = Venda::create([
                            'modelo' => $request->get('modelo'),
                            'valor' => $request->get('valor')
                        ]);

        $carros = $request->carros;
        foreach($carros as $a => $value) {
            VendaCarro::create([
                            'venda_id' => $venda->id,
                            'carro_id' => $carros[$a]
                        ]);
        }

        return redirect()->route('vendas');
    }

    public function index(){
        $vendas = Venda::all();
        return view('vendas.index',['vendas'=>$vendas]);
    }

}
