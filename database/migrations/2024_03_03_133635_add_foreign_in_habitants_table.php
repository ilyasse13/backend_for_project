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
        Schema::table('habitants', function (Blueprint $table) {
            $table->unsignedBigInteger('session_id');
            $table->string('id_admin');
            $table->foreign('session_id')->references('id_session')->on('sessions');
            $table->foreign('id_admin')->references('CIN')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('habitants', function (Blueprint $table) {
            //
        });
    }
};
