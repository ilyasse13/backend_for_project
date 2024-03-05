<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habitants', function (Blueprint $table) {
            $table->string('CIN')->primary();
            $table->string('Nom');
            $table->string('prenom');
            $table->string('username')->default(DB::raw('concat(prenom, ".", Nom)'))->unique(); // Set default value for username column
            $table->string('password')->default(DB::raw('MD5(CONCAT(prenom, Nom))'));
            $table->integer('num_app');
            $table->integer('num_imm');
            $table->string('image')->nullable();
            //to add later
            // $table->unsignedBigInteger('id_session');
            // $table->string('id_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitants');
    }
};
