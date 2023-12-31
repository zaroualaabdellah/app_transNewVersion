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
        Schema::create('chargements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offre_id');
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
            $table->boolean('chargement')->nullable();
            $table->boolean('dechargement')->nullable();
            $table->integer('etageChargement')->nullable();
            $table->integer('etageDechargement')->nullable();
            $table->boolean('ascenceurChargement')->nullable();
            $table->boolean('ascenceurDechargement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chargements');
    }
};
