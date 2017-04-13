<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artisans', function (Blueprint $table) {
              $table->engine = 'innodb';
            $table->increments('id_artisan');
            $table->integer('id_ville');
            $table->integer('id_statuts');
            $table->integer('reviews');
            $table->string('telephone',50);
            $table->integer('id_category');
            $table->string('etat_compte',50);
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
        Schema::dropIfExists('artisans');
    }
}
