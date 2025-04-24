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
        Schema::create('user_passage', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID de l'utilisateur
            $table->unsignedBigInteger('passage_id'); // ID du passage
            $table->boolean('is_completed')->default(false); // Indique si le passage est complété
            $table->timestamps();

            // Clés étrangères
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('passage_id')->references('id')->on('passages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_passage');
    }
};
