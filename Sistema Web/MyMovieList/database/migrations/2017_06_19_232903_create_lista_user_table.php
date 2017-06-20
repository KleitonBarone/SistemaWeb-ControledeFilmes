<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_user', function (Blueprint $table) {
            
            $table->integer('nota');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');

            $table->integer('lista_id')->unsigned()->nullable();
            $table->foreign('lista_id')->references('id')
            ->on('listas')->onDelete('cascade');

            $table->primary(['user_id', 'lista_id']);

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
        Schema::dropIfExists('lista_user');
    }
}
