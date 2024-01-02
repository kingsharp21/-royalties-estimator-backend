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
            $table->string('name')->unique();
            $table->string('artise_id');
            $table->string('email');
            $table->timestamp('status');
            $table->string('gender', 26)->nullable();
            $table->string('contact_number')->nullable();
            $table->string('country')->nullable();
            $table->string('genres')->nullable();
            $table->string('followers');
            $table->string('bg_img')->nullable();
            $table->string('md_img')->nullable();
            $table->string('sm_img')->nullable();
            $table->string('spotify_id');
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
