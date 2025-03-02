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
        Schema::create('annonce_touriste', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('annonce_id');
            $table->unsignedBigInteger('touriste_id');
            $table->foreign('touriste_id')->references('id')->on('touristes')->onDelete('cascade');
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade');

            $table->unique(['annonce_id', 'touriste_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce_touriste');
    }
};
