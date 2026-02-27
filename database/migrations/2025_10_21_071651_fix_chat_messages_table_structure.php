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
        // Check if chat_messages table exists and has the correct structure
        if (Schema::hasTable('chat_messages')) {
            // Drop the table if it exists with wrong structure
            Schema::dropIfExists('chat_messages');
        }
        
        // Recreate the table with correct structure
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conversation_id');
            $table->enum('sender_type', ['visitor', 'admin']);
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->text('message');
            $table->string('message_type')->default('text');
            $table->boolean('is_read')->default(false);
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            
            $table->foreign('conversation_id')->references('id')->on('chat_conversations')->onDelete('cascade');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_messages');
    }
};