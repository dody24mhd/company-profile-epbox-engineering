<?php

namespace App\Http\Controllers;

use App\Models\ChatConversation;
use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewChatNotification;

class LiveChatController extends Controller
{
    /**
     * Start a new conversation
     */
    public function startConversation(Request $request)
    {
        $sessionId = $request->session()->getId();
        
        // Check if conversation already exists
        $conversation = ChatConversation::where('session_id', $sessionId)->first();
        
        if (!$conversation) {
            $conversation = ChatConversation::create([
                'session_id' => $sessionId,
                'visitor_name' => $request->input('name'),
                'visitor_email' => $request->input('email'),
                'visitor_phone' => $request->input('phone'),
                'visitor_company' => $request->input('company'),
                'status' => 'waiting',
                'last_activity' => now(),
            ]);
        }

        return response()->json([
            'success' => true,
            'conversation_id' => $conversation->id,
            'session_id' => $sessionId,
        ]);
    }

    /**
     * Send a message
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'conversation_id' => 'required|exists:chat_conversations,id',
            'message' => 'required|string|max:1000',
        ]);

        $conversation = ChatConversation::findOrFail($request->conversation_id);
        
        // Create message
        $message = ChatMessage::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'visitor',
            'message' => $request->message,
            'message_type' => 'text',
        ]);

        // Update conversation activity
        $conversation->updateActivity();

        // If this is the first message, send email notification
        if ($conversation->messages()->count() === 1) {
            $this->sendEmailNotification($conversation);
        }

        // Broadcast message to admin dashboard
        broadcast(new \App\Events\NewChatMessage($message))->toOthers();

        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }

    /**
     * Get conversation messages
     */
    public function getMessages(Request $request, $conversationId)
    {
        $conversation = ChatConversation::findOrFail($conversationId);
        
        $messages = $conversation->messages()
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'messages' => $messages,
        ]);
    }

    /**
     * Send email notification to sales team
     */
    private function sendEmailNotification(ChatConversation $conversation)
    {
        try {
            Mail::to('sales@epbox-engg.com')->queue(new NewChatNotification($conversation));
        } catch (\Exception $e) {
            \Log::error('Failed to send chat notification email: ' . $e->getMessage());
        }
    }

    /**
     * Admin: Get all conversations
     */
    public function getConversations(Request $request)
    {
        $conversations = ChatConversation::with(['latestMessage', 'assignedTo'])
            ->orderBy('last_activity', 'desc')
            ->get();

        return response()->json([
            'success' => true,
            'conversations' => $conversations,
        ]);
    }

    /**
     * Admin: Assign conversation to admin
     */
    public function assignConversation(Request $request, $conversationId)
    {
        $request->validate([
            'admin_id' => 'required|exists:users,id',
        ]);

        $conversation = ChatConversation::findOrFail($conversationId);
        $conversation->update([
            'assigned_to' => $request->admin_id,
            'status' => 'active',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Conversation assigned successfully',
        ]);
    }

    /**
     * Admin: Send message to visitor
     */
    public function adminSendMessage(Request $request)
    {
        $request->validate([
            'conversation_id' => 'required|exists:chat_conversations,id',
            'message' => 'required|string|max:1000',
        ]);

        $conversation = ChatConversation::findOrFail($request->conversation_id);
        
        $message = ChatMessage::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'admin',
            'sender_id' => Auth::id(),
            'message' => $request->message,
            'message_type' => 'text',
        ]);

        // Update conversation activity
        $conversation->updateActivity();

        // Broadcast message to visitor
        broadcast(new \App\Events\NewChatMessage($message))->toOthers();

        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }
}
