<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFilmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome_filme');
            $table->integer('ano_filme')->nullable();
            $table->integer('id_genero_fk');

            $table->foreign('id_genero_fk')
                ->references('id')
                ->on('generos')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes');
    }
}
