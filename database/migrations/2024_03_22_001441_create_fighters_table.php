<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fighters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('weight_class');
            $table->string('nationality')->nullable();
            $table->integer('wins');
            $table->integer('losses');
            $table->integer('height')->nullable();
            $table->integer('reach')->nullable();
            $table->date('DOB')->nullable();
            $table->string('gym')->nullable();
            $table->json('stats')->nullable();
            $table->date('debut_date')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fighters');
    }
};
