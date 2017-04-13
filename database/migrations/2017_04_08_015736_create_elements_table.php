<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
              $table->engine = 'innodb';
            $table->increments('id_element');
            $table->string("email_artisan",50);
            $table->string("titre",50);
            $table->string("description",1000);
            $table->string("image_element",50);
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
        Schema::dropIfExists('elements');
    }
}
