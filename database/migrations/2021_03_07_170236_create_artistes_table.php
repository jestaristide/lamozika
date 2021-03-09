<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->date('date_naissance')->nullable();
            $table->string('origine')->nullable();
            $table->string('cin')->nullable();
            $table->string('adresse')->nullable();
            $table->string('nom_scene');
            $table->string('specialite')->nullable();
            $table->text('description')->nullable();
            $table->text('email')->nullable();
            $table->text('tel')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('reseaux_sociaux', function (Blueprint $table)
        {
            $table->id();
            $table->string('type');
            $table->string('url');
            $table->unsignedBigInteger('artiste_id');
            $table->timestamps();

            $table->foreign('artiste_id')
            ->references('id')->on('artistes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseaux_sociaux');
        Schema::dropIfExists('artistes');
    }
}
