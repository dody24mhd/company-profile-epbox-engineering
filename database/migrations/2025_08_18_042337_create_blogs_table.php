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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('description'); // Blog Description
            $table->string('title'); // Blog Title
            $table->string('tags'); // Tags
            $table->string('categories'); // Categories
            $table->string('img'); // Image (Filepath or URL)
            $table->date('date_publish'); // Date Published
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
