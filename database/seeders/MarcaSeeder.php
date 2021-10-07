<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;
class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create(['descricao'=>'Toyota']);
        Marca::create(['descricao'=>'Volkswagen']);
        Marca::create(['descricao'=>'Ford']);
        Marca::create(['descricao'=>'Honda']);
        Marca::create(['descricao'=>'Hyundai']);
        Marca::create(['descricao'=>'Nissan']);
        Marca::create(['descricao'=>'Chevrolet']);
        Marca::create(['descricao'=>'Kia']);
        Marca::create(['descricao'=>'Fiat']);
        Marca::create(['descricao'=>'Jaguar']);
        Marca::create(['descricao'=>'Land Rover']);
        Marca::create(['descricao'=>'Maserati']);
    }
}
