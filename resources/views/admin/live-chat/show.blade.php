@extends('layouts.admin')

@section('title', 'Live Chat - Conversation')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="page-title">Live Chat - {{ $conversation->visitor_name ?? 'Anonymous' }}</h4>
                    <div>
                        <a href="{{ route('admin.live-chat.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                        </a>
                        @if($conversation->status !== 'closed')
                        <button class="btn btn-danger" onclick="closeConversation()">
                            <i class="fas fa-times mr-2"></i>Close Conversation
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Visitor Info -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-user mr-2"></i>Visitor Information
                    </h5>
                </div>
                <div class="card-body">
                    <div class="visitor-details">
                        <div class="detail-item">
                            <strong>Name:</strong>
                            <p>{{ $conversation->visitor_name ?? 'Not provided' }}</p>
                        </div>
                        <div class="detail-item">
                            <strong>Email:</strong>
                            <p>{{ $conversation->visitor_email ?? 'Not provided' }}</p>
                        </div>
                        <div class="detail-item">
                            <strong>Phone:</strong>
                            <p>{{ $conversation->visitor_phone ?? 'Not provided' }}</p>
                        </div>
                        <div class="detail-item">
                            <strong>Company:</strong>
                            <p>{{ $conversation->visitor_company ?? 'Not provided' }}</p>
                        </div>
                        <div class="detail-item">
                            <strong>Status:</strong>
                            <span class="badge badge-{{ $conversation->status === 'waiting' ? 'warning' : ($conversation->status === 'active' ? 'success' : 'secondary') }}">
                                {{ ucfirst($conversation->status) }}
                            </span>
                        </div>
                        <div class="detail-item">
                            <strong>Started:</strong>
                            <p>{{ $conversation->created_at->format('M d, Y H:i') }}</p>
                        </div>
                        <div class="detail-item">
                            <strong>Last Activity:</strong>
                            <p>{{ $conversation->last_activity ? $conversation->last_activity->diffForHumans() : 'Never' }}</p>
                        </div>
                        @if($conversation->assignedTo)
                        <div class="detail-item">
                            <strong>Assigned To:</strong>
                            <p>{{ $conversation->assignedTo->name }}</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Messages -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-comment-dots mr-2"></i>Chat Messages
                        <span class="badge badge-primary ml-2">{{ $conversation->messages->count() }}</span>
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="chat-messages" id="chatMessages">
                        @forelse($conversation->messages as $message)
                        <div class="message-item {{ $message->sender_type }}">
                            <div class="message-header">
                                <strong>{{ $message->sender_type === 'visitor' ? $conversation->visitor_name : ($message->sender->name ?? 'Admin') }}</strong>
                                <span>{{ $message->created_at->format('M d, Y H:i') }}</span>
                            </div>
                            <div class="message-content">{{ $message->message }}</div>
                        </div>
                        @empty
                        <div class="text-center p-4 text-muted">
                            <i class="fas fa-comments" style="font-size: 3rem;"></i>
                            <p class="mt-2">No messages yet</p>
                        </div>
                        @endforelse
                    </div>
                </div>
                
                @if($conversation->status !== 'closed')
                <div class="card-footer">
                    <form id="messageForm">
                        <div class="input-group">
                            <input type="text" class="form-control" id="messageInput" placeholder="Type your message..." required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-paper-plane mr-2"></i>Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @else
                <div class="card-footer text-center text-muted">
                    <i class="fas fa-lock mr-2"></i>This conversation is closed
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.visitor-details .detail-item {
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.visitor-details .detail-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.visitor-details .detail-item strong {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

.visitor-details .detail-item p {
    margin: 0;
    color: #666;
}

.chat-messages {
    max-height: 500px;
    overflow-y: auto;
    padding: 20px;
    background: #f8f9fa;
}

.message-item {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 10px;
    max-width: 80%;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.message-item.visitor {
    background: #e3f2fd;
    margin-right: auto;
    border-left: 4px solid #2196f3;
}

.message-item.admin {
    background: #f3e5f5;
    margin-left: auto;
    border-left: 4px solid #9c27b0;
}

.message-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
    font-size: 12px;
    font-weight: 600;
    color: #666;
}

.message-content {
    font-size: 14px;
    line-height: 1.5;
    color: #333;
}

.badge {
    font-size: 11px;
}

.card-footer {
    background: white;
    border-top: 1px solid #eee;
}

.input-group .form-control {
    border-right: none;
}

.input-group .btn {
    border-left: none;
}
</style>
@endpush

@push('scripts')
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
let pusher = null;
let channel = null;
const conversationId = {{ $conversation->id }};

// Initialize Pusher
document.addEventListener('DOMContentLoaded', function() {
    pusher = new Pusher('{{ config("broadcasting.connections.pusher.key") }}', {
        cluster: '{{ config("broadcasting.connections.pusher.options.cluster") }}',
        encrypted: true
    });

    // Subscribe to conversation channel
    channel = pusher.subscribe('private-chat.' + conversationId);
    channel.bind('new-message', function(data) {
        addMessageToChat(data);
    });

    // Scroll to bottom initially
    scrollToBottom();
});

// Handle message form submission
$('#messageForm').on('submit', function(e) {
    e.preventDefault();
    
    const messageInput = $('#messageInput');
    const message = messageInput.val().trim();
    
    if (!message) return;
    
    $.ajax({
        url: `/admin/live-chat/${conversationId}/send-ajax`,
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
});

// Add message to chat
function addMessageToChat(message) {
    const chatMessages = document.getElementById('chatMessages');
    const messageDiv = document.createElement('div');
    
    messageDiv.className = `message-item ${message.sender_type}`;
    messageDiv.innerHTML = `
        <div class="message-header">
            <strong>${message.sender_type === 'visitor' ? '{{ $conversation->visitor_name ?? "Visitor" }}' : (message.sender_name || 'Admin')}</strong>
            <span>${new Date(message.created_at).toLocaleString()}</span>
        </div>
        <div class="message-content">${message.message}</div>
    `;
    
    chatMessages.appendChild(messageDiv);
    scrollToBottom();
}

// Scroll to bottom
function scrollToBottom() {
    const chatMessages = document.getElementById('chatMessages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Close conversation
function closeConversation() {
    if (confirm('Are you sure you want to close this conversation?')) {
        $.ajax({
            url: `/admin/live-chat/${conversationId}/close`,
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                location.reload();
            },
            error: function(xhr) {
                alert('Error closing conversation');
            }
        });
    }
}

// Auto-scroll to bottom when new messages arrive
const observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        if (mutation.type === 'childList') {
            scrollToBottom();
        }
    });
});

observer.observe(document.getElementById('chatMessages'), {
    childList: true
});
</script>
@endpush
