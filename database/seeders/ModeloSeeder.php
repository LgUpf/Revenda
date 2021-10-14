<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modelo;
class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelo::create(['descricao'=>'Gol']);
        Modelo::create(['descricao'=>'Palio']);
        Modelo::create(['descricao'=>'Uno']);
        Modelo::create(['descricao'=>'Celta']);
        Modelo::create(['descricao'=>'Strada']);
        Modelo::create(['descricao'=>'Onix']);
        Modelo::create(['descricao'=>'Fox']);
        Modelo::create(['descricao'=>'Corolla']);
        Modelo::create(['descricao'=>'Fiesta']);
        Modelo::create(['descricao'=>'Corsa']);
    }
}
