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
        Schema::create('choix', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('passage_id'); // ID du passage associé
            $table->string('texte'); // Texte du choix
            $table->unsignedBigInteger('suivant_id')->nullable(); // Passage suivant
            $table->timestamps();

            // Clés étrangères
            $table->foreign('passage_id')->references('id')->on('passages')->onDelete('cascade');
            $table->foreign('suivant_id')->references('id')->on('passages')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choix');
    }
};
