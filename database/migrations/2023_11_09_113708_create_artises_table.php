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
        Schema::create('artises', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->unique();
            $table->string('country', 191)->nullable();
            $table->string('genre', 191)->nullable();
            $table->string('bg_img', 191)->nullable();
            $table->string('md_img', 191)->nullable();
            $table->string('sm_img', 191)->nullable();
            $table->string('spotify_id', 191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artise');
    }
};
