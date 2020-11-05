<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoissonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poissons', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->integer('Espece_id');
            $table->string('Nom_locaux');
            $table->text('Aspect');
            $table->string('Couleur');
            $table->string('Taille');
            $table->text('Description');
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
        Schema::dropIfExists('poissons');
    }
}
