<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('requetes', function (Blueprint $table) {
            $table->integer('categorie_id')->unsigned()->index();
            $table->foreign('categorie_id')->references('id')->on('categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('messages', function (Blueprint $table) {
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')
                    ->onDelete('cascade')
                    ->onUpdate('cascade'); 
            $table->integer('requete_id')->unsigned();
            $table->foreign('requete_id')->references('id')->on('requetes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('employe_id')->unsigned();
            $table->foreign('employe_id')->references('id')->on('employes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });

        Schema::table('employes', function (Blueprint $table) {
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade'); 
                });
    }

    public function down()
    {
        Schema::table('requetes', function (Blueprint $table) {
            $table->dropForeign('requetes_categorie_id_foreign');
            $table->dropForeign('requetes_client_id_foreign');
        });
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign('messages_client_id_foreign');
            $table->dropForeign('messages_employe_id_foreign');
            $table->dropForeign('messages_requete_id_foreign');
        });
        Schema::table('employes', function (Blueprint $table) {
            $table->dropForeign('employes_service_id_foreign');
        });
    }


  
}
