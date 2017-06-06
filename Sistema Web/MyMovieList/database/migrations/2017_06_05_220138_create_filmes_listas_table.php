<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmesListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes_listas', function (Blueprint $table) {
            
            $table->integer('filme_id')->unsigned();

            $table->foreign('filme_id')->references('id')->on('filmes');

            $table->integer('lista_id')->unsigned();

            $table->foreign('lista_id')->references('id')->on('listas');

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
        Schema::dropIfExists('filmes_listas');
    }
}
