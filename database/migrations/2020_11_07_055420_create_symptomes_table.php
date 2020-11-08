<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymptomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptomes', function (Blueprint $table) {
            $table->id();
            $table->string('Symptome');
            $table->string('Daparition');
            $table->integer('Animal_id');
            $table->string('Maladie_id');
            $table->string('Probabilite');
            $table->integer('Etat');
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
        Schema::dropIfExists('symptomes');
    }
}
