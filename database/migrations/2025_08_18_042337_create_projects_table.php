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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Project Title
            $table->text('description'); // Project Description
            $table->string('img')->nullable(); // Image (Filepath or URL)
            $table->string('categories'); // Categories (slug format)
            $table->string('status')->default('published'); // published, draft, archived
            $table->string('client')->nullable(); // Client name
            $table->string('year')->nullable(); // Year completed
            $table->json('technologies')->nullable(); // Technologies used (array)
            $table->boolean('is_featured')->default(false); // Featured project
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
