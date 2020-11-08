<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Nom_locaux');
            $table->text('Aspect')->default(0)->nullable();
            $table->string('Couleur')->default(0)->nullable();
            $table->string('Taille')->default(0)->nullable();
            $table->text('Description');
            $table->string('Picture')->default(0)->nullable();
            $table->integer('Etat')->default(0)->nullable();
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
        Schema::dropIfExists('animals');
    }
}
