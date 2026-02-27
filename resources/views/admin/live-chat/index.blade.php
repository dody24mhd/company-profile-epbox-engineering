@extends('layouts.admin')

@section('title', 'Live Chat Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Live Chat Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Conversations List -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-comments mr-2"></i>Active Conversations
                        <span class="badge badge-primary ml-2" id="conversationCount">{{ $conversations->count() }}</span>
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="conversations-list" id="conversationsList">
                        @forelse($conversations as $conversation)
                        <div class="conversation-item {{ $conversation->status === 'waiting' ? 'waiting' : ($conversation->status === 'active' ? 'active' : 'closed') }}" 
                             data-conversation-id="{{ $conversation->id }}">
                            <div class="conversation-header">
                                <div class="visitor-info">
                                    <h6 class="mb-1">{{ $conversation->visitor_name ?? 'Anonymous' }}</h6>
                                    <small class="text-muted">{{ $conversation->visitor_email ?? 'No email' }}</small>
                                </div>
                                <div class="conversation-status">
                                    <span class="badge badge-{{ $conversation->status === 'waiting' ? 'warning' : ($conversation->status === 'active' ? 'success' : 'secondary') }}">
                                        {{ ucfirst($conversation->status) }}
                                    </span>
                                </div>
                            </div>
                            
                            @if($conversation->latestMessage)
                            <div class="latest-message">
                                <p class="mb-1 text-truncate">
                                    <strong>{{ $conversation->latestMessage->sender_type === 'visitor' ? $conversation->visitor_name : ($conversation->latestMessage->sender->name ?? 'Admin') }}:</strong>
                                    {{ $conversation->latestMessage->message }}
                                </p>
                                <small class="text-muted">{{ $conversation->latestMessage->created_at->diffForHumans() }}</small>
                            </div>
                            @endif
                            
                            <div class="conversation-actions">
                                <a href="{{ route('admin.live-chat.show', $conversation) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                @if($conversation->status === 'waiting')
                                <button class="btn btn-sm btn-success" onclick="assignConversation({{ $conversation->id }})">
                                    <i class="fas fa-user-plus"></i> Assign
                                </button>
                                @endif
                            </div>
                        </div>
                        @empty
                        <div class="text-center p-4">
                            <i class="fas fa-comments text-muted" style="font-size: 3rem;"></i>
                            <p class="text-muted mt-2">No conversations yet</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Area -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-comment-dots mr-2"></i>Chat Messages
                    </h5>
                </div>
                <div class="card-body">
                    <div id="chatArea" class="text-center text-muted">
                        <i class="fas fa-comments" style="font-size: 3rem;"></i>
                        <p class="mt-2">Select a conversation to start chatting</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Assign Conversation Modal -->
<div class="modal fade" id="assignModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Conversation</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form id="assignForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Assign to Admin:</label>
                        <select name="admin_id" class="form-control" required>
                            <option value="">Select Admin</option>
                            @foreach($admins as $admin)
                            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Assign</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.conversation-item {
    padding: 15px;
    border-bottom: 1px solid #eee;
    cursor: pointer;
    transition: background-color 0.2s;
}

.conversation-item:hover {
    background-color: #f8f9fa;
}

.conversation-item.active {
    background-color: #e3f2fd;
    border-left: 4px solid #2196f3;
}

.conversation-item.waiting {
    background-color: #fff3e0;
    border-left: 4px solid #ff9800;
}

.conversation-item.closed {
    background-color: #f5f5f5;
    opacity: 0.7;
}

.conversation-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 10px;
}

.visitor-info h6 {
    margin: 0;
    font-weight: 600;
}

.latest-message {
    margin-bottom: 10px;
}

.conversation-actions {
    display: flex;
    gap: 5px;
}

.conversation-actions .btn {
    padding: 4px 8px;
    font-size: 12px;
}

#chatArea {
    min-height: 400px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.chat-messages {
    max-height: 400px;
    overflow-y: auto;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 5px;
    margin-bottom: 15px;
}

.message-item {
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 8px;
    max-width: 80%;
}

.message-item.visitor {
    background: #e3f2fd;
    margin-right: auto;
}

.message-item.admin {
    background: #f3e5f5;
    margin-left: auto;
}

.message-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
    font-size: 12px;
    font-weight: 600;
}

.message-content {
    font-size: 14px;
    line-height: 1.4;
}

.chat-input-area {
    display: flex;
    gap: 10px;
}

.chat-input-area input {
    flex: 1;
}

.badge {
    font-size: 10px;
}
</style>
@endpush

@push('scripts')
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
let currentConversationId = null;
let pusher = null;
let channel = null;

// Initialize Pusher
document.addEventListener('DOMContentLoaded', function() {
    pusher = new Pusher('{{ config("broadcasting.connections.pusher.key") }}', {
        cluster: '{{ config("broadcasting.connections.pusher.options.cluster") }}',
        encrypted: true
    });

    // Subscribe to admin chat channel
    channel = pusher.subscribe('admin-chat');
    channel.bind('new-message', function(data) {
        if (data.conversation_id === currentConversationId) {
            addMessageToChat(data);
        }
        updateConversationList();
    });
});

// Assign conversation
function assignConversation(conversationId) {
    $('#assignModal').modal('show');
    $('#assignForm').data('conversation-id', conversationId);
}

// Handle assign form submission
$('#assignForm').on('submit', function(e) {
    e.preventDefault();
    
    const conversationId = $(this).data('conversation-id');
    const adminId = $('select[name="admin_id"]').val();
    
    $.ajax({
        url: `/admin/live-chat/${conversationId}/assign`,
        method: 'POST',
        data: {
            admin_id: adminId,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            $('#assignModal').modal('hide');
            location.reload();
        },
        error: function(xhr) {
            alert('Error assigning conversation');
        }
    });
});

// Load conversation messages
function loadConversation(conversationId) {
    currentConversationId = conversationId;
    
    $.ajax({
        url: `/admin/live-chat/${conversationId}/messages`,
        method: 'GET',
        success: function(response) {
            if (response.success) {
                displayChatArea(response.messages, conversationId);
            }
        },
        error: function(xhr) {
            console.error('Error loading messages');
        }
    });
}

// Display chat area
function displayChatArea(messages, conversationId) {
    const chatArea = $('#chatArea');
    
    chatArea.html(`
        <div class="chat-messages" id="chatMessages">
            ${messages.map(message => `
                <div class="message-item ${message.sender_type}">
                    <div class="message-header">
                        <strong>${message.sender_type === 'visitor' ? 'Visitor' : (message.sender ? message.sender.name : 'Admin')}</strong>
                        <span>${new Date(message.created_at).toLocaleTimeString()}</span>
                    </div>
                    <div class="message-content">${message.message}</div>
                </div>
            `).join('')}
        </div>
        <div class="chat-input-area">
            <input type="text" class="form-control" id="messageInput" placeholder="Type your message...">
            <button class="btn btn-primary" onclick="sendMessage()">Send</button>
        </div>
    `);
    
    // Scroll to bottom
    const chatMessages = document.getElementById('chatMessages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Send message
function sendMessage() {
    const messageInput = $('#messageInput');
    const message = messageInput.val().trim();
    
    if (!message || !currentConversationId) return;
    
    $.ajax({
        url: `/admin/live-chat/${currentConversationId}/send-ajax`,
        method: 'POST',
        data: {
            message: message,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if (response.success) {
                messageInput.val('');
                addMessageToChat(response.message);
            }
        },
        error: function(xhr) {
            alert('Error sending message');
        }
    });
}

// Add message to chat
function addMessageToChat(message) {
    const chatMessages = document.getElementById('chatMessages');
    if (!chatMessages) return;
    
    const messageDiv = document.createElement('div');
    messageDiv.className = `message-item ${message.sender_type}`;
    messageDiv.innerHTML = `
        <div class="message-header">
            <strong>${message.sender_type === 'visitor' ? 'Visitor' : (message.sender_name || 'Admin')}</strong>
            <span>${new Date(message.created_at).toLocaleTimeString()}</span>
        </div>
        <div class="message-content">${message.message}</div>
    `;
    
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Update conversation list
function updateConversationList() {
    $.ajax({
        url: '/admin/live-chat/conversations',
        method: 'GET',
        success: function(response) {
            if (response.success) {
                // Update conversation list
                // This would refresh the conversation list
                location.reload();
            }
        }
    });
}

// Handle Enter key in message input
$(document).on('keypress', '#messageInput', function(e) {
    if (e.which === 13) {
        sendMessage();
    }
});

// Auto-refresh conversations every 30 seconds
setInterval(function() {
    updateConversationList();
}, 30000);
</script>
@endpush
