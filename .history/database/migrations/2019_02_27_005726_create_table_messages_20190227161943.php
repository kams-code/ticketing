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
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients'); 
            $table->integer('requete_id')->unsigned();
            $table->foreign('requete_id')->references('id')->on('requetes'); 
            $table->integer('employe_id')->unique()->unsigned();
            $table->foreign('employe_id')->references('id')->on('employes'); 
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
