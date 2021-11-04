<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda_carros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('venda_id')->unsigned()->nullable();
            $table->foreign('venda_id')->references('id')->on('vendas');
            $table->bigInteger('carro_id')->unsigned()->nullable();
            $table->foreign('carro_id')->references('id')->on('carros');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda_carros');
    }
}
