<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelances', function (Blueprint $table) {
          $table->engine = 'innodb';
          $table->increments("id");
          $table->integer("id_artisan");
          $table->unique('id_artisan');
          $table->string("nom_freelance_complet");
          $table->string("image_freelance");
          $table->DateTime("date_de_naissance");
          //  $table->foreign('id_artisan')->references('id_artisan')->on('artisans');
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
        Schema::dropIfExists('freelances');
    }
}
