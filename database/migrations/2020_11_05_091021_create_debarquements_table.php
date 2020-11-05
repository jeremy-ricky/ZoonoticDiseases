<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebarquementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debarquements', function (Blueprint $table) {
            $table->id();
            $table->integer('Embarquement_id');
            $table->date('Date_debarquement');
            $table->date('Heure_debarquement');
            $table->integer('Port_id');
            $table->integer('Etat')->default(0);
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
        Schema::dropIfExists('debarquements');
    }
}
