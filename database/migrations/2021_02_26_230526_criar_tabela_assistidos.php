<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAssistidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistidos', function(Blueprint $table) {
            $table->increments('id_assistidos');
            $table->date('data_assistido')->nullable();
            $table->integer('id_filme_fk');

            $table->foreign('id_filme_fk')
                ->references('id')
                ->on('filmes')
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
        Schema::dropIfExists('assistidos');
    }
}
