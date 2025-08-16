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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->index();
            $table->string('name')->index();
            $table->integer('trophies');
            $table->integer('bestTrophies');
            $table->integer('expLevel');
            $table->integer('attackWins');
            $table->integer('defenseWins');
            $table->integer('donations');
            $table->string('clanName')->nullable();
            $table->string('clanTag')->nullable();
            $table->string('league')->nullable();
            $table->string('leagueIcon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
