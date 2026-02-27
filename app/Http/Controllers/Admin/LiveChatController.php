<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChatConversation;
use App\Models\ChatMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LiveChatController extends Controller
{
    /**
     * Display live chat dashboard
     */
    public function index()
    {
        $conversations = ChatConversation::with(['latestMessage', 'assignedTo', 'messages'])
            ->orderBy('last_activity', 'desc')
            ->get();

        $admins = User::where('is_admin', true)->get();

        return view('admin.live-chat.index', compact('conversations', 'admins'));
    }

    /**
     * Show specific conversation
     */
    public function show(ChatConversation $conversation)
    {
        $conversation->load(['messages.sender', 'assignedTo']);
        
        // Mark messages as read
        $conversation->messages()
            ->where('sender_type', 'visitor')
            ->where('is_read', false)
            ->update(['is_read' => true, 'read_at' => now()]);

        return view('admin.live-chat.show', compact('conversation'));
    }

    /**
     * Assign conversation to admin
     */
    public function assign(Request $request, ChatConversation $conversation)
    {
        $request->validate([
            'admin_id' => 'required|exists:users,id',
        ]);

        $conversation->update([
            'assigned_to' => $request->admin_id,
            'status' => 'active',
        ]);

        return redirect()->back()->with('success', 'Conversation assigned successfully.');
    }

    /**
     * Send message to visitor
     */
    public function sendMessage(Request $request, ChatConversation $conversation)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

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

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    /**
     * Close conversation
     */
    public function close(ChatConversation $conversation)
    {
        $conversation->update(['status' => 'closed']);

        return redirect()->back()->with('success', 'Conversation closed successfully.');
    }

    /**
     * Get conversations for AJAX
     */
    public function getConversations()
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
     * Get messages for specific conversation
     */
    public function getMessages(ChatConversation $conversation)
    {
        $messages = $conversation->messages()
            ->with('sender')
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'messages' => $messages,
        ]);
    }

    /**
     * Send message via AJAX
     */
    public function sendMessageAjax(Request $request, ChatConversation $conversation)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

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
            'message' => $message->load('sender'),
        ]);
    }
}