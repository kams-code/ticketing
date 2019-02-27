<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('contenu');

            client_id,
            employe_id,
            requete_id
            $table->interger('client_id')->unique()->unsigned();
            $table->foreign('client_id')->references('id')->on('clients'); 
            $table->interger('requete_id')->unique()->unsigned();
            $table->foreign('client_id')->references('id')->on('clients'); 
            $table->interger('client_id')->unique()->unsigned();
            $table->foreign('client_id')->references('id')->on('clients'); 
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
        Schema::dropIfExists('messages');
    }
}
