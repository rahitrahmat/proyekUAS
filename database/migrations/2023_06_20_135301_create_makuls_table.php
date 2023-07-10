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
        Schema::create('makuls', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('sks');
            $table->string('semester');
            $table->string('ruang');
            $table->string('hari');
            $table->time('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makuls');
    }
};
