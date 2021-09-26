<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenda extends Model
{
    protected $table = "revendas";
    protected $fillable = ['nome', 'telefone','dt_fundada','endereco'];
}

