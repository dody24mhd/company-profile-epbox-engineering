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
        Schema::create('chat_conversations', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->unique(); // Unique session for each visitor
            $table->string('visitor_name')->nullable();
            $table->string('visitor_email')->nullable();
            $table->string('visitor_phone')->nullable();
            $table->string('visitor_company')->nullable();
            $table->string('status')->default('active'); // active, closed, waiting
            $table->unsignedBigInteger('assigned_to')->nullable(); // Admin user ID
            $table->timestamp('last_activity')->nullable();
            $table->timestamps();
            
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_conversations');
    }
};
