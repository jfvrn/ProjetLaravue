<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('passages', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre du passage
            $table->text('content'); // Contenu du passage
            $table->unsignedBigInteger('parent_id')->nullable(); // Passage parent (relation hiérarchique)
            $table->foreign('parent_id')->references('id')->on('passages')->onDelete('cascade'); // Clé étrangère
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passages');
    }
};
