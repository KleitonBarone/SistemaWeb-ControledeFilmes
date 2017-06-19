<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeListaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_lista', function (Blueprint $table) {

            $table->integer('filme_id')->unsigned()->nullable();
            $table->foreign('filme_id')->references('id')
            ->on('filmes')->onDelete('cascade');

            $table->integer('lista_id')->unsigned()->nullable();
            $table->foreign('lista_id')->references('id')
            ->on('listas')->onDelete('cascade');

            $table->primary(['filme_id', 'lista_id']);

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
        Schema::dropIfExists('filme_lista');
    }
}
