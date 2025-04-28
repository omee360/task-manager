<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Ye migration tasks table banata hai
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // up method table ko create karta hai
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            // id: Auto-incrementing primary key
            $table->id();
            // title: Task ka title (string, max 255 characters)
            $table->string('title', 255);
            // description: Task ka description (text, optional)
            $table->text('description')->nullable();
            // created_at aur updated_at: Timestamps for record tracking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    // down method table ko drop karta hai
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
