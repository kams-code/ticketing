<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('requetes', function (Blueprint $table) {
            $table->integer('categorie_id')->unsigned()->index()
            $table->foreign('categorie_id')->references('id')->on('categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('chatter_post', function (Blueprint $table) {
            $table->foreign('chatter_discussion_id')->references('id')->on('chatter_discussion')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('chatter_discussion', function (Blueprint $table) {
            $table->dropForeign('chatter_discussion_chatter_category_id_foreign');
            $table->dropForeign('chatter_discussion_user_id_foreign');
        });
        Schema::table('chatter_post', function (Blueprint $table) {
            $table->dropForeign('chatter_post_chatter_discussion_id_foreign');
            $table->dropForeign('chatter_post_user_id_foreign');
        });
    }


  
}