<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaviresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navires', function (Blueprint $table) {
            $table->id();
            $table->integer('Embarquement_id');
            $table->integer('Outil_id');
            $table->integer('Pecheur_id');
            $table->integer('Zone_id');
            $table->double('Quantite');
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
        Schema::dropIfExists('navires');
    }
}
