<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome');
            $table->float('calorias');
            $table->float('carboidratos');
            $table->float('proteinas');
            $table->float('gorduras_totais');
            $table->float('gordura_saturada');
            $table->float('gordura_trans');
            $table->float('fibras');
            $table->float('sodio');
            $table->float('calcio');
            $table->float('ferro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimentos');
    }
}
