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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image')->nullable();
            $table->string('handle');
            $table->text('tweet')->nullable();
            $table->string('file')->nullable();
            $table->boolean('is_video')->nullable();
            $table->string('comments')->nullable();
            $table->string('retweets')->nullable();
            $table->string('likes')->nullable();
            $table->string('analytics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};
