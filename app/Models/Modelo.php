<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = "modelos";
    protected $fillable = ['descricao'];

    public function marcas() {
        return $this->hashMany("App\Models\Marca");
    }
    public function carros() {
        return $this->hashMany("App\Models\Carro");
    }

}
