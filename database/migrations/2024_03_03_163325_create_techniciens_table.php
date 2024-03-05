<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('techniciens', function (Blueprint $table) {
            $table->string('CIN')->primary();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Telephone');
            $table->unsignedBigInteger('id_metier');
            $table->timestamps();

            $table->foreign('id_metier')->references('id')->on('metiers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('techniciens');
    }
};
