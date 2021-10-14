<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas";
    protected $fillable = ['descricao','modelo_id'];


    public function carros() {
        return $this->hashMany("App\Models\Carro");
    }
    public function modelo() {
        return $this->belongsTo("App\Models\Modelo");
    }
}
