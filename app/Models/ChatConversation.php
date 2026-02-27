<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatConversation extends Model
{
    protected $fillable = [
        'session_id',
        'visitor_name',
        'visitor_email',
        'visitor_phone',
        'visitor_company',
        'status',
        'assigned_to',
        'last_activity',
    ];

    protected $casts = [
        'last_activity' => 'datetime',
    ];

    /**
     * Get the messages for this conversation
     */
    public function messages(): HasMany
    {
        return $this->hasMany(ChatMessage::class, 'conversation_id');
    }

    /**
     * Get the assigned admin user
     */
    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    /**
     * Get the latest message
     */
    public function latestMessage()
    {
        return $this->hasOne(ChatMessage::class, 'conversation_id')->latest();
    }

    /**
     * Check if conversation is active
     */
    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    /**
     * Check if conversation is waiting for admin
     */
    public function isWaiting(): bool
    {
        return $this->status === 'waiting';
    }

    /**
     * Update last activity
     */
    public function updateActivity(): void
    {
        $this->update(['last_activity' => now()]);
    }
}
