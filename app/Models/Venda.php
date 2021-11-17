<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";
    protected $fillable = ['nome', 'valor'];

    public function carros() {
        return $this->hasMany("App\Models\VendaCarro");
    }

}
