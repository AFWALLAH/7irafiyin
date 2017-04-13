<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionnellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionnelles', function (Blueprint $table) {
    $table->engine = 'innodb';
            $table->integer("id_artisan");
            $table->primary("id_artisan");
            $table->string("nom_societe");
            $table->string("adresse_societe");
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
        Schema::dropIfExists('professionnelles');
    }
}
