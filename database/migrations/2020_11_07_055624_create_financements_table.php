<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financements', function (Blueprint $table) {
            $table->id();
            $table->string('Intitule');
            $table->double('Montant');
            $table->text('Description');
            $table->integer('Bailleur_id');
            $table->string('Domaine_expertise');
            $table->string('Piece_jointe1');
            $table->string('Piece_jointe2');
            $table->string('Piece_jointe3');
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
        Schema::dropIfExists('financements');
    }
}
