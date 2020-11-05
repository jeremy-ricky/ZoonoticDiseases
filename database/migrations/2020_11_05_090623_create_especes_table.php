<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especes', function (Blueprint $table) {
            $table->id();
            $table->text('Caracteristique_distinctifs');
            $table->double('Taille');
            $table->string('Habitat');
            $table->text('Nutrition');
            $table->text('Comportement');
            $table->string('Notes');
            $table->string('Nom');
            $table->string('Picture')->default(0);
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
        Schema::dropIfExists('especes');
    }
}
