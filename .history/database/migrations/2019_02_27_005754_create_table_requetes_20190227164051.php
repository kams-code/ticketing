<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRequetes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('contenu');
            $table->integer('client_id')->unsigned()->index();
            $table->integer('categorie_id')->unsigned()->index;
             $table->foreign('categorie_id')->references('id')->on('categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            
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
        Schema::dropIfExists('requetes');
    }
}
