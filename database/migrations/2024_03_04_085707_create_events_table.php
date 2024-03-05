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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->unsignedBigInteger('session_id');
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('session_id')->references('id_session')->on('sessions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
