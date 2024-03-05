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
        Schema::create('admins', function (Blueprint $table) {
            $table->string('CIN')->primary();
            $table->string('Nom');
            $table->string('prenom');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('num_app');
            $table->integer('num_imm');
            $table->string('tel');
            $table->string('image')->nullable();
            $table->timestamps();
            //to add later
            // $table->unsignedBigInteger('id_session');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
