<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = "carros";
    protected $fillable = ['modelo_id', 'marca_id', 'ano','km','cambio', 'carroceria', 'cor','itens'];

    public function marca() {
        return $this->belongsTo("App\Models\Marca");
    }
    public function modelo() {
        return $this->belongsTo("App\Models\Modelo");
    }
}
