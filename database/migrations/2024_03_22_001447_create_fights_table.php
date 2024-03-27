<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fighter1_id')->constrained('fighters');
            $table->foreignId('fighter2_id')->constrained('fighters');
            $table->foreignId('winner_id')->nullable()->constrained('fighters');
            $table->string('win_method')->nullable();
            $table->boolean('fighter1_bonus')->default(false);
            $table->boolean('fighter2_bonus')->default(false);
            $table->date('date')->nullable();
            $table->string('location')->nullable();
            $table->foreignId('event_id')->constrained('events');
            $table->json('odds')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fights');
    }
};
