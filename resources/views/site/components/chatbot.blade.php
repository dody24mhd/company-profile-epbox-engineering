<!-- Live Chat Bot Component -->
<div class="chat-box" id="chatBox" onclick="if(typeof epToggleChat === 'function') { epToggleChat(event); }" style="display: none !important; opacity: 0 !important; visibility: hidden !important; pointer-events: none !important; position: fixed !important; bottom: 20px !important; right: 20px !important; width: 60px !important; height: 60px !important; z-index: 99999 !important;">
    <i class="fas fa-comments"></i>
    <div class="chat-indicator" id="chatIndicator" style="display: none;">
        <span class="chat-dot"></span>
    </div>
</div>
<script>
// IMMEDIATE: Hide chatbox instantly - runs before any other script
(function() {
    'use strict';
    try {
        // Multiple approaches to ensure it's hidden
        var chatBox = document.getElementById('chatBox');
        if (chatBox) {
            // Set all possible hidden states with !important
            chatBox.style.setProperty('display', 'none', 'important');
            chatBox.style.setProperty('opacity', '0', 'important');
            chatBox.style.setProperty('visibility', 'hidden', 'important');
            chatBox.style.setProperty('pointer-events', 'none', 'important');
            chatBox.setAttribute('hidden', '');
            chatBox.setAttribute('aria-hidden', 'true');
        }
        
        // Also try by class name as fallback
        var chatBoxes = document.getElementsByClassName('chat-box');
        for (var i = 0; i < chatBoxes.length; i++) {
            chatBoxes[i].style.setProperty('display', 'none', 'important');
            chatBoxes[i].style.setProperty('opacity', '0', 'important');
            chatBoxes[i].style.setProperty('visibility', 'hidden', 'important');
            chatBoxes[i].style.setProperty('pointer-events', 'none', 'important');
        }
        
        // Also hide popup
        var chatPopup = document.getElementById('chatPopup');
        if (chatPopup) {
            chatPopup.style.setProperty('display', 'none', 'important');
            chatPopup.style.setProperty('opacity', '0', 'important');
            chatPopup.style.setProperty('visibility', 'hidden', 'important');
        }
    } catch(e) {
        // Silently fail if DOM not ready
    }
})();
</script>
<div class="chat-popup" id="chatPopup">
    <div class="chat-header">
        <h3><i class="fas fa-robot mr-2"></i>AI Assistant</h3>
        <div class="chat-mode-toggle">
            <button class="mode-btn active" id="aiModeBtn" onclick="switchToAIMode()">
                <i class="fas fa-robot"></i> AI
            </button>
            <button class="mode-btn" id="humanModeBtn" onclick="switchToHumanMode()">
                <i class="fas fa-headset"></i> Human
            </button>
        </div>
        <button class="close-chat" onclick="epToggleChat(event)"><i class="fas fa-times"></i></button>
    </div>
    
    <!-- Visitor Info Form (shown first) -->
    <div class="chat-body" id="visitorInfoForm">
        <p class="text-gray-300 text-sm mb-4">Please provide your information to start chatting:</p>
        <div class="visitor-form">
            <input type="text" class="chat-input" placeholder="Your Name" id="visitorName">
            <input type="email" class="chat-input" placeholder="Email Address" id="visitorEmail">
            <input type="tel" class="chat-input" placeholder="Phone Number (Optional)" id="visitorPhone">
            <input type="text" class="chat-input" placeholder="Company (Optional)" id="visitorCompany">
            <button class="chat-btn primary" onclick="epStartConversation()">
                <i class="fas fa-comments mr-2"></i>Start Chat
            </button>
        </div>
    </div>
    
    <!-- Chat Messages Area -->
    <div class="chat-body" id="chatMessagesArea" style="display: none;">
        <div class="chat-status" id="chatStatus">
            <span class="status-text">Connecting...</span>
        </div>
        <div class="messages-container" id="messagesContainer">
            <!-- Messages will be loaded here -->
        </div>
        <!-- Quick Reply Buttons (AI Mode) -->
        <div class="quick-replies" id="quickReplies" style="display: none;">
            <p class="text-xs text-gray-400 mb-2">Quick questions:</p>
            <div class="quick-reply-buttons">
                <button class="quick-reply-btn" onclick="sendQuickReply('What services do you offer?')">Services</button>
                <button class="quick-reply-btn" onclick="sendQuickReply('What are your capabilities?')">Capabilities</button>
                <button class="quick-reply-btn" onclick="sendQuickReply('What industries do you serve?')">Industries</button>
                <button class="quick-reply-btn" onclick="sendQuickReply('Where are your offices?')">Locations</button>
                <button class="quick-reply-btn" onclick="sendQuickReply('Contact information')">Contact</button>
            </div>
        </div>
        
        <div class="chat-input-area">
            <input type="text" class="chat-input" placeholder="Type your message here..." id="chatMessage" onkeypress="handleKeyPress(event)">
            <button class="chat-btn primary" onclick="epSendMessage()">
                <i class="fas fa-paper-plane mr-2"></i>Send
            </button>
        </div>
        <div class="chat-actions">
            <a href="https://wa.me/6281170088989" target="_blank" class="chat-btn secondary">
                <i class="fab fa-whatsapp mr-2"></i>WhatsApp Us
            </a>
        </div>
    </div>
</div>

@push('scripts')
@php
    $pusherKey = config('broadcasting.connections.pusher.key');
    $pusherCluster = config('broadcasting.connections.pusher.options.cluster');
    $broadcastConnection = config('broadcasting.default');
    $hasPusherConfig = !empty($pusherKey) && !empty($pusherCluster) && $broadcastConnection === 'pusher';
@endphp

@if($hasPusherConfig)
<!-- Load Pusher.js asynchronously for better performance -->
<script>
    // Load Pusher.js asynchronously only if Pusher is configured
    (function() {
        var script = document.createElement('script');
        script.src = 'https://js.pusher.com/8.2.0/pusher.min.js';
        script.async = true;
        script.defer = true;
        script.onload = function() {
            // Initialize chat after Pusher loads
            if (typeof initChatAfterPusher === 'function') {
                initChatAfterPusher();
            }
        };
        script.onerror = function() {
            // Silently fail if Pusher.js fails to load
            console.warn('Pusher.js failed to load. Live chat will use polling fallback.');
        };
        document.head.appendChild(script);
    })();
</script>
@endif

<script>
// Live Chat Variables
let conversationId = null;
let pusher = null;
let channel = null;
let epMessagesInterval = null;

@php
    $pusherKey = config('broadcasting.connections.pusher.key');
    $pusherCluster = config('broadcasting.connections.pusher.options.cluster');
    $broadcastConnection = config('broadcasting.default');
    $hasPusherConfig = !empty($pusherKey) && !empty($pusherCluster) && $broadcastConnection === 'pusher';
@endphp

// Initialize Pusher only when needed and if configured
function initializePusher() {
    @if($hasPusherConfig)
    if (!pusher && window.Pusher) {
        try {
            var pusherKey = '{{ $pusherKey }}';
            var pusherCluster = '{{ $pusherCluster }}';
            
            // Only initialize if we have valid credentials
            if (pusherKey && pusherCluster) {
                pusher = new Pusher(pusherKey, {
                    cluster: pusherCluster,
                    encrypted: true,
                    enabledTransports: ['ws', 'wss'],
                    disabledTransports: []
                });
            }
        } catch (error) {
            // Silently fail - will use polling fallback
            console.warn('Pusher initialization failed. Using polling fallback.');
        }
    }
    @else
    // Pusher not configured - will use polling fallback only
    @endif
}

// Check if Pusher is configured
var hasPusherConfig = {{ $hasPusherConfig ? 'true' : 'false' }};

// Function to initialize chat after Pusher loads
function initChatAfterPusher() {
    initializePusher();
    // Chat will be initialized when user opens it
}

// Chat Bot Functionality
function epToggleChat(e) {
    
    // Prevent any default behavior
    if (e) {
        e.stopPropagation();
        e.preventDefault();
        e.stopImmediatePropagation();
    }
    
    // Helper function to find element with retry
    function findElementWithRetry(id, className, maxRetries = 3) {
        let element = null;
        for (let i = 0; i < maxRetries; i++) {
            // Try multiple methods
            element = document.getElementById(id);
            if (!element) element = document.querySelector('.' + className);
            if (!element) element = document.querySelector('[id="' + id + '"]');
            
            if (element) break;
            
            // Wait a bit before retrying
            if (i < maxRetries - 1) {
                // Use synchronous delay (not ideal, but works)
                const start = Date.now();
                while (Date.now() - start < 50) {}
            }
        }
        return element;
    }
    
    // Try to find elements with retry
    let chatPopup = findElementWithRetry('chatPopup', 'chat-popup');
    let chatBox = findElementWithRetry('chatBox', 'chat-box');
    
    // If still not found, try querySelectorAll and get first element
    if (!chatPopup) {
        const allPopups = document.querySelectorAll('.chat-popup, [id="chatPopup"], #chatPopup');
        if (allPopups.length > 0) {
            chatPopup = allPopups[0];
        }
    }
    
    if (!chatBox) {
        const allBoxes = document.querySelectorAll('.chat-box, [id="chatBox"], #chatBox');
        if (allBoxes.length > 0) {
            chatBox = allBoxes[0];
        }
    }
    
    if (!chatPopup) {
        // Try one more time after a short delay
        setTimeout(function() {
            const retryPopup = document.getElementById('chatPopup') || document.querySelector('.chat-popup');
            if (retryPopup) {
                epToggleChat(e);
            }
        }, 100);
        return;
    }
    
    if (!chatBox) {
        return;
    }
    
        if (chatPopup.classList.contains('active')) {
            // Close chat with smooth animation
            chatPopup.classList.remove('active');
            chatBox.classList.remove('active');
            
            // Hide popup after animation completes
            setTimeout(() => {
            if (chatPopup) {
                chatPopup.style.display = 'none';
                chatPopup.style.visibility = 'hidden';
            }
            }, 400);
            
            if (epMessagesInterval) {
                clearInterval(epMessagesInterval);
                epMessagesInterval = null;
            }
        } else {
        // SIMPLE APPROACH: Just show the popup directly
        // Remove hidden attributes
        chatPopup.removeAttribute('hidden');
        chatPopup.removeAttribute('aria-hidden');
            
        // Force show with !important to override any CSS
        chatPopup.style.cssText = 'display: block !important; visibility: visible !important; opacity: 1 !important; pointer-events: auto !important; z-index: 100000 !important;';
        
        // Add active class for animation
                chatPopup.classList.add('active');
                chatBox.classList.add('active');
        }
    }

// Make function globally accessible - ensure it's available
window.epToggleChat = epToggleChat;

// Also expose it immediately for inline onclick

// Start conversation with visitor info
async function epStartConversation() {
    const name = document.getElementById('visitorName').value.trim();
    const email = document.getElementById('visitorEmail').value.trim();
    const phone = document.getElementById('visitorPhone').value.trim();
    const company = document.getElementById('visitorCompany').value.trim();
    
    if (!name || !email) {
        alert('Please provide at least your name and email address.');
        return;
    }
    
    try {
        const response = await fetch('/api/live-chat/start', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                name: name,
                email: email,
                phone: phone,
                company: company
            })
        });
        
        const data = await response.json();
        
        if (data.success) {
            conversationId = data.conversation_id;
            
            // Hide visitor form and show chat area
            document.getElementById('visitorInfoForm').style.display = 'none';
            document.getElementById('chatMessagesArea').style.display = 'block';
            
            // Start in AI mode by default
            switchToAIMode();
            
            // Initialize Pusher only when starting conversation
            initializePusher();
            
            // Subscribe to conversation channel for human mode
            subscribeToConversation();
            
            // Load existing messages only once
            loadMessages();
            
            // Start polling fallback if realtime not connected (only for human mode)
            if (epMessagesInterval) clearInterval(epMessagesInterval);
            epMessagesInterval = setInterval(() => {
                if (currentMode === 'human') {
                loadMessages();
                }
            }, 3000);
        } else {
            alert('Failed to start conversation. Please try again.');
        }
    } catch (error) {
        console.error('Error starting conversation:', error);
        alert('Something went wrong. Please try again.');
    }
}

// Subscribe to conversation channel
function subscribeToConversation() {
    if (!hasPusherConfig || !pusher || !conversationId) return;
    
    try {
        channel = pusher.subscribe('private-chat.' + conversationId);
        
        channel.bind('new-message', function(data) {
            addMessageToChat(data);
        });
    } catch (error) {
        // Silently fail - will use polling fallback
        console.warn('Failed to subscribe to Pusher channel. Using polling fallback.');
    }
}

// Load existing messages
async function loadMessages() {
    if (!conversationId) return;
    
    try {
        const response = await fetch(`/api/live-chat/messages/${conversationId}`);
        const data = await response.json();
        
        if (data.success) {
            const messagesContainer = document.getElementById('messagesContainer');
            const currentMessageCount = messagesContainer.children.length;
            
            // Only reload if there are new messages
            if (data.messages.length > currentMessageCount) {
            messagesContainer.innerHTML = '';
            
            data.messages.forEach(message => {
                addMessageToChat(message);
            });
            
            scrollToBottom();
            }
        }
    } catch (error) {
        console.error('Error loading messages:', error);
    }
}

// Send message
async function epSendMessage() {
    const messageInput = document.getElementById('chatMessage');
    const message = messageInput.value.trim();
    
    if (!message) return;
    
    // Add user message to chat
    const userMessage = {
        message: message,
        sender_type: 'visitor',
        sender_name: 'You',
        created_at: new Date().toISOString()
    };
    addMessageToChat(userMessage);
    messageInput.value = '';
    
    // Handle AI mode
    if (currentMode === 'ai') {
        // Show typing indicator
        showTypingIndicator();
        
        // Simulate AI thinking time
        setTimeout(() => {
            hideTypingIndicator();
            const aiResponse = getAIResponse(message);
            addAIMessage(aiResponse);
        }, 1000 + Math.random() * 1000); // Random delay between 1-2 seconds
    } else {
        // Handle human mode (existing functionality)
        if (!conversationId) return;
    
    try {
        const response = await fetch('/api/live-chat/send', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                conversation_id: conversationId,
                message: message
            })
        });
        
        const data = await response.json();
        
        if (data.success) {
            addMessageToChat(data.message);
            scrollToBottom();
        } else {
            alert('Failed to send message. Please try again.');
        }
    } catch (error) {
        console.error('Error sending message:', error);
        alert('Something went wrong. Please try again.');
        }
    }
}

// Add message to chat UI
function addMessageToChat(message) {
    const messagesContainer = document.getElementById('messagesContainer');
    const messageDiv = document.createElement('div');
    
    const isVisitor = message.sender_type === 'visitor';
    const senderName = message.sender_name || (isVisitor ? 'You' : 'Admin');
    
    messageDiv.className = `message ${isVisitor ? 'visitor' : 'admin'}`;
    messageDiv.innerHTML = `
        <div class="message-header">
            <strong>${senderName}</strong>
            <span class="message-time">${new Date(message.created_at).toLocaleTimeString()}</span>
        </div>
        <div class="message-content">${message.message}</div>
    `;
    
    messagesContainer.appendChild(messageDiv);
    
    if (message.sender_type === 'admin' && currentMode === 'human') {
        updateChatStatus('Connected with admin');
    }
    scrollToBottom();
}

// Update chat status
function updateChatStatus(status) {
    const statusElement = document.getElementById('chatStatus');
    if (statusElement) {
    statusElement.querySelector('.status-text').textContent = status;
    }
}

// Update chat status only if not in AI mode
function updateChatStatusIfNotAI(status) {
    if (currentMode !== 'ai') {
        updateChatStatus(status);
    }
}

// Scroll to bottom of messages
function scrollToBottom() {
    const messagesContainer = document.getElementById('messagesContainer');
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

// WhatsApp contact function
function openWhatsApp() {
    window.open('https://wa.me/6281170088989', '_blank');
}

// Close chat when clicking outside
document.addEventListener('click', function(event) {
    const chatPopup = document.getElementById('chatPopup');
    const chatBox = document.querySelector('.chat-box');
    
    if (chatPopup && chatBox && 
        !chatPopup.contains(event.target) && 
        !chatBox.contains(event.target) &&
        chatPopup.classList.contains('active')) {
        
        // Close chat with smooth animation
        chatPopup.classList.remove('active');
        chatBox.classList.remove('active');
        
        // Hide popup after animation completes
        setTimeout(() => {
            chatPopup.style.display = 'none';
        }, 400);
        
        if (epMessagesInterval) {
            clearInterval(epMessagesInterval);
            epMessagesInterval = null;
        }
    }
});

// AI Chatbot Variables
let currentMode = 'ai'; // 'ai' or 'human'
let aiResponses = {
    'services': 'EPBOX ENGINEERING PTE LTD offers comprehensive engineering services including:<br><br>• <strong>Control Panel Engineering</strong> - Low Voltage control panels tailored to operational and environmental requirements<br>• <strong>Automation Integration</strong> - Seamless integration of PLC, SCADA, and HMI systems for intelligent industrial automation<br>• <strong>System Integration Solutions</strong> - Ensuring all system layers, from field devices to enterprise platforms, work seamlessly together<br>• <strong>Engineering & Technical Support</strong> - End-to-end engineering support across the project lifecycle<br>• <strong>Safety & Compliance by Design</strong> - Every solution developed with safety as a core principle<br><br>We serve industries like Oil & Gas, Power Generation, Data Centres, Marine & Offshore, and more.',
    
    'capabilities': 'Our core capabilities include:<br><br>• <strong>Control Panel Design & Manufacturing</strong> - Intelligent control panels and automation systems<br>• <strong>Automation Integration</strong> - PLC, SCADA, and HMI systems integration<br>• <strong>System Integration</strong> - Ensuring all system layers work seamlessly together<br>• <strong>Engineering Support</strong> - Complete technical support across project lifecycle<br>• <strong>Safety & Compliance</strong> - IEC, NEMA, ATEX, IECEx, ABS, DNV certifications and compliance<br><br>True to our motto: "Beyond Boundaries, We Command Control".',
    
    'company': 'EPBOX ENGINEERING PTE LTD is a trusted innovator in the design and manufacturing of intelligent control panels and industrial automation solutions. We deliver systems that empower our clients with reliability, precision, and adaptability in the most demanding environments.<br><br>We are based in Singapore and Batam, Indonesia, serving clients across Southeast Asia with professional panel manufacturing and control system solutions.',
    
    'industries': 'We serve various industries including:<br><br>• <strong>Oil & Gas</strong> - FPSO, refinery controls, ATEX/IECEx certified panels<br>• <strong>Power Generation & Clean Energy</strong> - Substation controls, solar/wind integration<br>• <strong>Data Centres & Industrial Automation</strong> - LV distribution, UPS/BMS integration<br>• <strong>Building Infrastructure</strong> - HVAC, lighting, security systems<br>• <strong>Water Treatment</strong> - Integrated control systems<br>• <strong>Marine & Offshore</strong> - ABS/DNV compliant electrical panels<br><br>Would you like to know more about any specific industry?',
    
    'locations': 'EPBOX ENGINEERING PTE LTD has offices in:<br><br>• <strong>Singapore</strong> - 1 Sunview Road Eco-Tech@sunview, Singapore 627615<br>• <strong>Batam, Indonesia</strong> - Warna Jaya Business Park blok A1-06, Batam, Kepulauan Riau<br><br>Both offices are equipped with modern facilities and experienced engineering teams. Our Singapore office serves as our main headquarters while Batam provides local support for Indonesian operations.',
    
    'contact': 'You can reach us through:<br><br>• <strong>Email:</strong> sales@epbox-engg.com<br>• <strong>Singapore Phone:</strong> +65 8282 9835<br>• <strong>Indonesia Phone:</strong> +62 811 7008 8989<br>• <strong>Website:</strong> epbox-engg.com<br><br>We typically respond within 24 hours. For urgent matters, please fill out our contact form or switch to Human mode for immediate assistance.',
    
    'certifications': 'Our panels are manufactured and tested in compliance with:<br><br>• <strong>IEC Standards</strong> - International Electrotechnical Commission<br>• <strong>NEMA Standards</strong> - National Electrical Manufacturers Association<br>• <strong>ATEX Certification</strong> - European Directive for explosive atmospheres<br>• <strong>IECEx Certification</strong> - International explosion-proof standard<br>• <strong>ABS Compliance</strong> - American Bureau of Shipping<br>• <strong>DNV Compliance</strong> - Marine and offshore classification society<br><br>All Explosion Proof Panels use Aluminum or SS316 enclosures.',
    
    'default': 'Hello! I\'m Epy-Bot, your AI assistant for EPBOX ENGINEERING PTE LTD. I can help you with information about:<br>• Our services and capabilities<br>• Industries we serve<br>• Office locations<br>• Certifications & Compliance<br>• Contact information<br><br>How can I assist you today?'
};

// AI Response Function
function getAIResponse(message) {
    const msg = message.toLowerCase();
    
    // Check for greeting keywords first
    const greetingKeywords = ['hello', 'hi', 'hey', 'hai', 'halo', 'selamat', 'good morning', 'good afternoon', 'good evening', 'salam', 'assalamualaikum', 'pagi', 'siang', 'sore', 'malam'];
    const isGreeting = greetingKeywords.some(keyword => msg.includes(keyword));
    
    // If it's a greeting, respond with greeting first
    if (isGreeting) {
        const greetings = [
            'Hello! 👋 Welcome to EPBOX ENGINEERING PTE LTD! I\'m Epy-Bot, your AI assistant.',
            'Hi there! 😊 Great to see you here at EPBOX ENGINEERING PTE LTD!',
            'Hello! 🌟 Welcome! I\'m here to help you learn about our engineering solutions.',
            'Hi! 👋 Thanks for visiting EPBOX ENGINEERING PTE LTD! How can I assist you today?',
            'Hello there! 🚀 Welcome to EPBOX ENGINEERING PTE LTD! I\'m Epy-Bot, ready to help!'
        ];
        const randomGreeting = greetings[Math.floor(Math.random() * greetings.length)];
        
        // Check if there are other keywords after the greeting
        const hasOtherKeywords = msg.includes('service') || msg.includes('offer') || msg.includes('provide') || 
                                msg.includes('capabilit') || msg.includes('expertise') || msg.includes('skill') || 
                                msg.includes('company') || msg.includes('about') || msg.includes('industry') || 
                                msg.includes('office') || msg.includes('location') || msg.includes('contact') || 
                                msg.includes('certif') || msg.includes('compliance');
        
        if (hasOtherKeywords) {
            // If there are other keywords, provide greeting + relevant info
            let additionalInfo = '';
            if (msg.includes('service') || msg.includes('offer') || msg.includes('provide')) {
                additionalInfo = '<br><br>' + aiResponses.services;
            } else if (msg.includes('capabilit') || msg.includes('expertise') || msg.includes('skill')) {
                additionalInfo = '<br><br>' + aiResponses.capabilities;
            } else if (msg.includes('company') || msg.includes('about')) {
                additionalInfo = '<br><br>' + aiResponses.company;
            } else if (msg.includes('industry')) {
                additionalInfo = '<br><br>' + aiResponses.industries;
            } else if (msg.includes('office') || msg.includes('location')) {
                additionalInfo = '<br><br>' + aiResponses.locations;
            } else if (msg.includes('contact')) {
                additionalInfo = '<br><br>' + aiResponses.contact;
            } else if (msg.includes('certif') || msg.includes('compliance')) {
                additionalInfo = '<br><br>' + aiResponses.certifications;
            }
            return randomGreeting + additionalInfo;
        } else {
            // Just greeting, provide default help
            return randomGreeting + '<br><br>' + aiResponses.default;
        }
    }
    
    // Regular keyword detection (non-greeting)
    if (msg.includes('service') || msg.includes('offer') || msg.includes('provide')) {
        return aiResponses.services;
    } else if (msg.includes('capabilit') || msg.includes('expertise') || msg.includes('skill') || msg.includes('what can you')) {
        return aiResponses.capabilities;
    } else if (msg.includes('company') || msg.includes('about us') || msg.includes('about epbox') || msg.includes('who are you')) {
        return aiResponses.company;
    } else if (msg.includes('industry') || msg.includes('industry') || msg.includes('client') || msg.includes('customer') || msg.includes('serve')) {
        return aiResponses.industries;
    } else if (msg.includes('office') || msg.includes('location') || msg.includes('where') || msg.includes('singapore') || msg.includes('batam') || msg.includes('address')) {
        return aiResponses.locations;
    } else if (msg.includes('contact') || msg.includes('phone') || msg.includes('email') || msg.includes('reach') || msg.includes('how to contact') || msg.includes('phone number')) {
        return aiResponses.contact;
    } else if (msg.includes('certif') || msg.includes('compliance') || msg.includes('standard') || msg.includes('atex') || msg.includes('iec')) {
        return aiResponses.certifications;
    } else if (msg.includes('help') || msg.includes('start')) {
        return aiResponses.default;
    } else if (msg.includes('epbox') || msg.includes('epbox engineering')) {
        return 'EPBOX ENGINEERING PTE LTD is a trusted innovator specializing in intelligent control panels and industrial automation solutions. We design and manufacture control systems for Oil & Gas, Power Generation, Data Centres, and Marine & Offshore industries.<br><br>Would you like to know about our services, capabilities, or office locations?';
    } else {
        return 'I understand you\'re asking about "' + message + '". I can help you with information about:<br>• Services and capabilities<br>• Company information<br>• Industries we serve<br>• Office locations<br>• Certifications<br>• Contact details<br><br>For specific technical questions, I recommend switching to Human mode or contacting our sales team at sales@epbox-engg.com';
    }
}

// Mode Switching Functions
function switchToAIMode() {
    currentMode = 'ai';
    document.getElementById('aiModeBtn').classList.add('active');
    document.getElementById('humanModeBtn').classList.remove('active');
    document.getElementById('quickReplies').style.display = 'block';
    
    // Only update status if not currently typing
    if (!isUserTyping) {
        updateChatStatus('AI Assistant is ready to help');
    }
    
    // Add AI welcome message if no messages yet
    const messagesContainer = document.getElementById('messagesContainer');
    if (messagesContainer.children.length === 0) {
        addAIMessage('Hello! I\'m Epy-Bot, your AI assistant. I can help you with information about EPBOX ENGINEERING PTE LTD. How can I assist you today?');
    }
}

function switchToHumanMode() {
    currentMode = 'human';
    document.getElementById('humanModeBtn').classList.add('active');
    document.getElementById('aiModeBtn').classList.remove('active');
    document.getElementById('quickReplies').style.display = 'none';
    updateChatStatus('Connecting to human agent...');
    
    // Show escalation message
    addAIMessage('I\'m connecting you with a human agent who can provide more detailed assistance. Please wait while we connect you...');
}

// Quick Reply Function
function sendQuickReply(message) {
    document.getElementById('chatMessage').value = message;
    epSendMessage();
}

// Add AI Message to Chat
function addAIMessage(message) {
    const messagesContainer = document.getElementById('messagesContainer');
    const messageDiv = document.createElement('div');
    
    messageDiv.className = 'message ai';
    messageDiv.innerHTML = `
        <div class="message-header">
            <strong><i class="fas fa-robot mr-1"></i>Epy-Bot AI</strong>
            <span class="message-time">${new Date().toLocaleTimeString()}</span>
        </div>
        <div class="message-content">${message}</div>
    `;
    
    messagesContainer.appendChild(messageDiv);
    scrollToBottom();
}

// Show Typing Indicator
function showTypingIndicator() {
    const messagesContainer = document.getElementById('messagesContainer');
    const typingDiv = document.createElement('div');
    typingDiv.className = 'typing-indicator';
    typingDiv.id = 'typingIndicator';
    typingDiv.innerHTML = `
        <i class="fas fa-robot mr-2"></i>Epy-Bot is typing
        <div class="typing-dots">
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
            <div class="typing-dot"></div>
        </div>
    `;
    
    messagesContainer.appendChild(typingDiv);
    scrollToBottom();
}

// Hide Typing Indicator
function hideTypingIndicator() {
    const typingIndicator = document.getElementById('typingIndicator');
    if (typingIndicator) {
        typingIndicator.remove();
    }
}

// Handle Enter Key
function handleKeyPress(event) {
    if (event.key === 'Enter') {
        epSendMessage();
    }
}

// Prevent status change while user is typing
let isUserTyping = false;
let typingTimeout = null;

// Track user typing
function trackUserTyping() {
    isUserTyping = true;
    
    // Clear existing timeout
    if (typingTimeout) {
        clearTimeout(typingTimeout);
    }
    
    // Set timeout to mark user as not typing
    typingTimeout = setTimeout(() => {
        isUserTyping = false;
    }, 1000);
}

// Enhanced updateChatStatus that respects user typing
function updateChatStatusSafely(status) {
    if (!isUserTyping && currentMode === 'ai') {
        updateChatStatus(status);
    } else if (currentMode === 'human') {
        updateChatStatus(status);
    }
}

// IMMEDIATE: Hide chatbox before DOM is ready to prevent flash
(function() {
    const chatBox = document.getElementById('chatBox');
    if (chatBox) {
        chatBox.style.display = 'none';
        chatBox.style.opacity = '0';
        chatBox.style.visibility = 'hidden';
    }
})();

// Optimized chatbot initialization
(function() {
    // Initialize chatbot only once
    if (window.chatbotInitialized) return;
    
    function initChatbot() {
    // Get elements
    const chatPopupEl = document.getElementById('chatPopup');
    const chatBoxEl = document.getElementById('chatBox');
    const chatMessageInput = document.getElementById('chatMessage');
    
    // Initialize chat popup
    if (chatPopupEl) {
        chatPopupEl.style.display = 'none';
        chatPopupEl.classList.remove('active');
        chatPopupEl.addEventListener('click', function(ev) { 
            ev.stopPropagation(); 
        });
    }
    
        // Initialize chat box - show ONLY when user scrolls down
    if (chatBoxEl) {
            // Ensure chatbot stays hidden initially
            chatBoxEl.style.cssText = 'display: none !important; opacity: 0 !important; visibility: hidden !important; pointer-events: none !important;';
            
            let hasScrolled = false;
            let chatbotShown = false;
            
            // Function to attach click handler to element (reusable) - SIMPLIFIED VERSION
            function attachClickHandlerToElement(element) {
                if (!element) {
                    console.error('Cannot attach handler: element is null');
                    return;
                }
                
                
                // Simple approach: just set onclick directly (no cloning needed)
                // Remove old onclick first
                element.onclick = null;
                
                // Method 1: Direct onclick property (most reliable)
                element.onclick = function(e) {
                    e = e || window.event;
                    
                    if (e) {
            e.stopPropagation();
                        e.preventDefault();
                        e.stopImmediatePropagation();
                    }
                    
                    // Verify elements exist before calling
                    const popup = document.getElementById('chatPopup');
                    const box = document.getElementById('chatBox');
                    
                    if (!popup) {
                        return false;
                    }
                    
                    if (typeof epToggleChat === 'function') {
                        try {
                            epToggleChat(e);
                        } catch (error) {
                            // Silently fail
                        }
                    }
                    return false;
                };
                
                // Method 2: Event listener as backup (use capture phase to catch early)
                element.addEventListener('click', function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    
                    const popup = document.getElementById('chatPopup');
                    if (!popup) {
                        return;
                    }
                    
                    if (typeof epToggleChat === 'function') {
                        try {
                            epToggleChat(e);
                        } catch (error) {
                            // Silently fail
                        }
                    }
                }, true); // Use capture phase
                
                // Method 3: Onclick attribute (fallback)
                element.setAttribute('onclick', 'if(typeof epToggleChat === "function") { epToggleChat(event); return false; }');
                
                element.setAttribute('data-click-attached', 'true');
            }
            
            // Function to show chatbot (only once)
            function showChatBox() {
                if (chatbotShown || !chatBoxEl) return;
                
                // Check if page loader is still visible
                const loader = document.getElementById('page-loader');
                if (loader && !loader.classList.contains('hidden') && loader.offsetParent !== null) {
                    // If loader still visible, wait a bit
                    setTimeout(showChatBox, 100);
                    return;
                }
                
                chatbotShown = true;
                
                // Mark as ready first
                chatBoxEl.classList.add('chat-ready');
                
                // Force reflow
                chatBoxEl.offsetHeight;
                
                // Remove inline styles that prevent display
                chatBoxEl.style.removeProperty('display');
                chatBoxEl.style.removeProperty('opacity');
                chatBoxEl.style.removeProperty('visibility');
                chatBoxEl.style.removeProperty('pointer-events');
                
                // Remove hidden attributes first
                chatBoxEl.removeAttribute('hidden');
                chatBoxEl.removeAttribute('aria-hidden');
                
                // Add visible class for fade-in animation
                requestAnimationFrame(function() {
                    if (chatBoxEl) {
                        chatBoxEl.classList.add('chat-visible');
                        
                        // CRITICAL: Enable pointer events AFTER adding visible class
                        // Use setTimeout to ensure CSS is applied first
                        setTimeout(function() {
                            if (chatBoxEl) {
                                // Force enable pointer events with multiple methods
                                chatBoxEl.style.setProperty('pointer-events', 'auto', 'important');
                                chatBoxEl.style.setProperty('cursor', 'pointer', 'important');
                                chatBoxEl.style.setProperty('display', 'flex', 'important');
                                
                                // Re-attach click handlers after chatbot is visible
                                attachClickHandlerToElement(chatBoxEl);
                            }
                        }, 50);
                    }
                });
            }
            
            // Show chatbot when user scrolls down
            function handleScroll() {
                // Check if user has scrolled down (more than 100px)
                const scrollY = window.scrollY || window.pageYOffset;
                
                if (scrollY > 100 && !hasScrolled) {
                    hasScrolled = true;
                    showChatBox();
                }
            }
            
            // Wait for page to be ready before listening to scroll
            function initScrollListener() {
                // Check if page loader is gone
                const loader = document.getElementById('page-loader');
                if (loader && !loader.classList.contains('hidden') && loader.offsetParent !== null) {
                    setTimeout(initScrollListener, 100);
                    return;
                }
                
                // Check if body still has loading class
                if (document.body.classList.contains('page-loading')) {
                    setTimeout(initScrollListener, 100);
                    return;
                }
                
                // Now listen to scroll events
                window.addEventListener('scroll', handleScroll, { passive: true });
                
                // Also check current scroll position (in case user is already scrolled)
                handleScroll();
            }
            
            // Initialize scroll listener after page load
            if (document.readyState === 'complete') {
                setTimeout(initScrollListener, 500);
            } else {
                window.addEventListener('load', function() {
                    setTimeout(initScrollListener, 500);
                }, { once: true });
            }
            
            // Attach immediately when element is found
            attachClickHandlerToElement(chatBoxEl);
            
            // Re-attach after chatbot becomes visible (important!)
            setTimeout(function() {
                const visibleChatBox = document.getElementById('chatBox');
                if (visibleChatBox) {
                    attachClickHandlerToElement(visibleChatBox);
                }
            }, 1500);
            
    }
    
    // Initialize chat input
    if (chatMessageInput) {
        chatMessageInput.addEventListener('input', trackUserTyping);
        chatMessageInput.addEventListener('keydown', trackUserTyping);
        chatMessageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                epSendMessage();
            }
        });
    }
        
        window.chatbotInitialized = true;
    }
    
    // Run immediately if DOM already ready, otherwise wait
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initChatbot);
    } else {
        initChatbot();
    }
})();
</script>
@endpush

@push('styles')
<style>
/* Chat Mode Toggle */
.chat-mode-toggle {
    display: flex;
    gap: 4px;
    margin-right: 10px;
}

.mode-btn {
    padding: 6px 12px;
    border: 1px solid #374151;
    background: transparent;
    color: #9CA3AF;
    border-radius: 4px;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.mode-btn.active {
    background: #3B82F6;
    color: white;
    border-color: #3B82F6;
}

.mode-btn:hover {
    background: #374151;
    color: white;
}

/* Quick Reply Buttons */
.quick-replies {
    padding: 10px;
    border-top: 1px solid #374151;
    background: #1F2937;
}

.quick-reply-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
}

.quick-reply-btn {
    padding: 6px 12px;
    background: #374151;
    color: #E5E7EB;
    border: none;
    border-radius: 16px;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.quick-reply-btn:hover {
    background: #3B82F6;
    color: white;
}

/* Typing Indicator */
.typing-indicator {
    display: flex;
    align-items: center;
    padding: 10px;
    color: #9CA3AF;
    font-style: italic;
}

.typing-dots {
    display: inline-flex;
    gap: 2px;
    margin-left: 8px;
}

.typing-dot {
    width: 4px;
    height: 4px;
    background: #9CA3AF;
    border-radius: 50%;
    animation: typing 1.4s infinite;
}

.typing-dot:nth-child(2) { animation-delay: 0.2s; }
.typing-dot:nth-child(3) { animation-delay: 0.4s; }

@keyframes typing {
    0%, 60%, 100% { transform: translateY(0); }
    30% { transform: translateY(-10px); }
}

/* AI Message Styling */
.message.ai {
    background: linear-gradient(135deg, #1F2937 0%, #374151 100%);
    border-left: 3px solid #3B82F6;
}

.message.ai .message-header {
    color: #3B82F6;
}

.message.ai .message-content {
    color: #E5E7EB;
    line-height: 1.6;
}

.message.ai .message-content strong {
    color: #60A5FA;
}
</style>

@push('styles')
<style>
/* Chat Bot Styles - Optimized and Non-blocking */
/* NOTE: Initial hidden state is defined in app.blade.php head section for immediate effect */
.chat-box {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    cursor: pointer !important;
    box-shadow: 0 4px 20px rgba(59, 130, 246, 0.4);
    transition: all 0.3s ease;
    z-index: 99999;
    border: 2px solid #ffffff;
    /* Prevent layout shift */
    will-change: transform;
    /* Optimize rendering */
    contain: layout style paint;
}

/* Ensure chatbot is clickable when visible */
.chat-box.chat-ready.chat-visible {
    pointer-events: auto !important;
    cursor: pointer !important;
    z-index: 99999 !important;
}

/* Force enable pointer events for active chatbot */
.chat-box.active,
#chatBox.active {
    pointer-events: auto !important;
    cursor: pointer !important;
    z-index: 99999 !important;
}

.chat-box:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 25px rgba(59, 130, 246, 0.6);
}

.chat-box i {
    color: white;
    font-size: 24px;
}

.chat-popup {
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 350px;
    background: #1f2937;
    border-radius: 15px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    transform: translateY(100%) scale(0.8);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 10000;
    border: 1px solid #374151;
    display: none;
    visibility: hidden;
    pointer-events: none;
    /* Optimize rendering */
    will-change: transform, opacity;
    contain: layout style paint;
}

.chat-popup.active {
    transform: translateY(0) scale(1) !important;
    opacity: 1 !important;
    visibility: visible !important;
    display: block !important;
    pointer-events: auto !important;
}

.chat-header {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    color: white;
    padding: 15px 20px;
    border-radius: 15px 15px 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chat-header h3 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.close-chat {
    background: none;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 18px;
    padding: 5px;
    border-radius: 50%;
    transition: background-color 0.2s;
}

.close-chat:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

.chat-body {
    padding: 20px;
}

.chat-input {
    width: 100%;
    padding: 12px 15px;
    background: #374151;
    border: 1px solid #4b5563;
    border-radius: 8px;
    color: white;
    font-size: 14px;
    margin-bottom: 15px;
    transition: border-color 0.2s;
}

.chat-input:focus {
    outline: none;
    border-color: #3b82f6;
}

.chat-input::placeholder {
    color: #9ca3af;
}

.chat-actions {
    display: flex;
    gap: 10px;
}

.chat-btn {
    flex: 1;
    padding: 10px 15px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
}

.chat-btn.primary {
    background: #3b82f6;
    color: white;
}

.chat-btn.primary:hover {
    background: #2563eb;
}

.chat-btn.secondary {
    background: #374151;
    color: #d1d5db;
    border: 1px solid #4b5563;
}

.chat-btn.secondary:hover {
    background: #4b5563;
    color: white;
}

.chat-indicator {
    position: absolute;
    top: -5px;
    right: -5px;
    width: 20px;
    height: 20px;
    background: #ef4444;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chat-dot {
    width: 8px;
    height: 8px;
    background: white;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.2); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}

.visitor-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.chat-status {
    text-align: center;
    padding: 10px;
    background: #374151;
    border-radius: 5px;
    margin-bottom: 15px;
}

.status-text {
    color: #10b981;
    font-size: 14px;
    font-weight: 500;
}

.messages-container {
    max-height: 300px;
    overflow-y: auto;
    margin-bottom: 15px;
    padding: 10px;
    background: #1f2937;
    border-radius: 5px;
}

.message {
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 8px;
    max-width: 80%;
}

.message.visitor {
    background: #3b82f6;
    color: white;
    margin-left: auto;
}

.message.admin {
    background: #374151;
    color: #d1d5db;
    margin-right: auto;
}

.message-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px;
    font-size: 12px;
    opacity: 0.8;
}

.message-content {
    font-size: 14px;
    line-height: 1.4;
}

.chat-input-area {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
}

.chat-input-area .chat-input {
    flex: 1;
    margin-bottom: 0;
}

@media (max-width: 768px) {
    .chat-popup {
        width: 300px;
        right: 10px;
        bottom: 80px;
    }
    
    .chat-box {
        right: 10px;
        bottom: 10px;
        width: 50px;
        height: 50px;
    }
    
    .chat-box i {
        font-size: 20px;
    }
    
    .messages-container {
        max-height: 250px;
    }
    
    .message {
        max-width: 90%;
    }
}
</style>
@endpush