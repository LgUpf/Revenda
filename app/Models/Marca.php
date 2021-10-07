<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas";
    protected $fillable = ['descricao'];

    public function carros() {
        return $this->hashMany("App\Models\Carro");
    }
}
