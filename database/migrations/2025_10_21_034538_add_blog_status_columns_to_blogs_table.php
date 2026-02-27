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
        Schema::table('blogs', function (Blueprint $table) {
            // Add is_featured column if it doesn't exist
            if (!Schema::hasColumn('blogs', 'is_featured')) {
                $table->boolean('is_featured')->default(false);
            }
            
            // Add slug column if it doesn't exist
            if (!Schema::hasColumn('blogs', 'slug')) {
                $table->string('slug')->nullable();
            }
            
            // Add content column if it doesn't exist
            if (!Schema::hasColumn('blogs', 'content')) {
                $table->text('content')->nullable();
            }
            
            // Add image_url column if it doesn't exist
            if (!Schema::hasColumn('blogs', 'image_url')) {
                $table->string('image_url')->nullable();
            }
            
            // Add author column if it doesn't exist
            if (!Schema::hasColumn('blogs', 'author')) {
                $table->string('author')->nullable();
            }
            
            // Add meta_title column if it doesn't exist
            if (!Schema::hasColumn('blogs', 'meta_title')) {
                $table->string('meta_title')->nullable();
            }
            
            // Add meta_description column if it doesn't exist
            if (!Schema::hasColumn('blogs', 'meta_description')) {
                $table->text('meta_description')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn([
                'is_featured',
                'slug',
                'content',
                'image_url',
                'author',
                'meta_title',
                'meta_description'
            ]);
        });
    }
};
