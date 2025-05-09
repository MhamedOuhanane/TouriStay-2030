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
        Schema::table('proprietaires', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('Country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proprietaire', function (Blueprint $table) {
            //
        });
    }
};
