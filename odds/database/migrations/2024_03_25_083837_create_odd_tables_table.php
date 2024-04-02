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
        Schema::create('odd_tables', function (Blueprint $table) {
            $table->id();
            $table->longText('tournament_name');
            $table->string('fulltime')->nullable();
            $table->timestamp('startDate')->nullable();
            $table->string('score_fulltime')->nullable();
            $table->text('home_team');
            $table->text('away_team');
            $table->json('odd_details')->nullable();
            $table->json('choose_team_fulltime')->nullable();
            $table->json('ratioFulltime')->nullable();
            $table->json('topUnderfulltime')->nullable();
            $table->json('choose_team_half')->nullable();
            $table->json('ratiohalf')->nullable();
            $table->json('topUnderhalf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odd_tables');
    }
};
