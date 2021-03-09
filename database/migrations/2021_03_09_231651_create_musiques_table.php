<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musiques', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('tags')->nullable();
            $table->string('genre')->nullable();
            $table->string('sous_genre')->nullable();
            $table->string('yt_link')->nullable();
            $table->string('audio_link')->nullable();
            $table->string('studio_enregistrement')->nullable();
            $table->string('annee_enregistrement')->nullable();
            $table->string('realisateur')->nullable();
            $table->string('auteur')->nullable();
            $table->string('compositeur')->nullable();
            $table->string('editeur')->nullable();
            $table->string('version')->nullable();
            $table->string('studio')->nullable();
            $table->string('pochette')->nullable();
            $table->string('couverture')->nullable();
            $table->timestamps();
        });


        Schema::create('artistes_musiques', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('musique_id')->index();
            $table->unsignedBigInteger('artiste_id')->index();
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
        Schema::dropIfExists('artistes_musiques');
        Schema::dropIfExists('musiques');
    }
}
