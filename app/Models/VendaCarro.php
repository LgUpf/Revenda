<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendaCarro extends Model
{
    protected $table = "venda_carros";
    protected $fillable = ['venda_id', 'carro_id'];

}
