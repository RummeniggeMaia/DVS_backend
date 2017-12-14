<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('quantidade');
        });

        Schema::table('items', function (Blueprint $table){
            $table->integer('alimento_id')->unsigned();
            $table->integer('cardapio_id')->unsigned()->nullable();
            $table->integer('medida_id')->unsigned()->nullable();

            $table->foreign('alimento_id')
                ->references('id')->on('alimentos')->onDelete('cascade');
            $table->foreign('cardapio_id')
                ->references('id')->on('cardapios')->onDelete('set null');
            $table->foreign('medida_id')
                ->references('id')->on('medidas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
