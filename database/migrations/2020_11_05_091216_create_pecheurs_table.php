<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePecheursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pecheurs', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->string('Email');
            $table->string('Sexe');
            $table->date('Date_naissance');
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
        Schema::dropIfExists('pecheurs');
    }
}
