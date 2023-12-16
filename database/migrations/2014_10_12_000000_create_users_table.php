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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom');
            $table->string('numero_telephone')->unique();
            $table->string('numero_whatsapp');
            $table->string('photo_visage')->nullable();
            $table->string('race');
            $table->string('keri');
            $table->string('keribour');
            $table->string('keri_du_pere');
            $table->string('keribour_du_pere');
            $table->string('village_natal');
            $table->enum('niveau_etudes', ['L1', 'L2', 'L3', 'M1', 'M2'])->nullable();
            $table->string('option_etude');
            $table->string('ecole_universite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
