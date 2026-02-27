<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Live Chat Message - EPBOX ENGINEERING PTE LTD</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #1E90FF 0%, #4169E1 100%);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 900;
            letter-spacing: 0.5px;
        }

        .alert {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
            padding: 15px;
            margin: 20px;
            border-radius: 6px;
            font-weight: bold;
        }

        .content {
            padding: 20px;
        }

        .visitor-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
            border-left: 4px solid #1E90FF;
        }

        .visitor-info h3 {
            margin: 0 0 15px 0;
            color: #0F1C3F;
            font-size: 18px;
        }

        .info-row {
            margin-bottom: 10px;
            font-size: 14px;
        }

        .info-label {
            font-weight: bold;
            color: #333;
            display: inline-block;
            width: 100px;
        }

        .message-content {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
            font-style: italic;
            line-height: 1.8;
        }

        .action-buttons {
            text-align: center;
            margin: 30px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            font-size: 14px;
            background-color: #1E90FF;
            color: white;
        }

        .btn:hover {
            background-color: #187bcd;
        }

        .footer {
            background-color: #0F1C3F;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 12px;
        }

        .timestamp {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 4px;
            margin: 15px 0;
            font-size: 13px;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>💬 NEW LIVE CHAT MESSAGE</h1>
        </div>

        <div class="alert">
            ⚠️ A new visitor has started a live chat conversation. Please respond as soon as possible.
        </div>

        <div class="content">
            <div class="timestamp">
                <strong>Started:</strong> {{ $conversation->created_at->format('F j, Y \a\t g:i A') }}
            </div>

            <div class="visitor-info">
                <h3>👤 Visitor Information</h3>
                @if($conversation->visitor_name)
                <div class="info-row">
                    <span class="info-label">Name:</span> {{ $conversation->visitor_name }}
                </div>
                @endif
                @if($conversation->visitor_email)
                <div class="info-row">
                    <span class="info-label">Email:</span> <a href="mailto:{{ $conversation->visitor_email }}">{{
                        $conversation->visitor_email }}</a>
                </div>
                @endif
                @if($conversation->visitor_phone)
                <div class="info-row">
                    <span class="info-label">Phone:</span> <a href="tel:{{ $conversation->visitor_phone }}">{{
                        $conversation->visitor_phone }}</a>
                </div>
                @endif
                @if($conversation->visitor_company)
                <div class="info-row">
                    <span class="info-label">Company:</span> {{ $conversation->visitor_company }}
                </div>
                @endif
                <div class="info-row">
                    <span class="info-label">Status:</span> {{ ucfirst($conversation->status) }}
                </div>
            </div>

            @php
            $firstMessage = $conversation->messages()->orderBy('created_at', 'asc')->first();
            @endphp

            @if($firstMessage)
            <div class="message-content">
                <strong>📝 First Message:</strong><br><br>
                {{ $firstMessage->message }}
            </div>
            @endif

            <div class="action-buttons">
                <a href="{{ $adminUrl ?? url('/admin/live-chat') }}?conversation={{ $conversation->id }}" class="btn">
                    💬 Open Chat Conversation
                </a>
            </div>

            <div style="font-size: 13px; color: #6c757d; margin-top: 20px;">
                <strong>Note:</strong> This email was automatically generated from the EPBOX ENGINEERING PTE LTD live
                chat system.
                Please respond promptly to maintain good customer service.
            </div>
        </div>

        <div class="footer">
            EPBOX ENGINEERING PTE LTD - Live Chat Notification System<br>
            This is an automated notification. Please do not reply to this email.
        </div>
    </div>
</body>

</html>