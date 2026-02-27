<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission - EPBOX ENGINEERING PTE LTD - {{ $name }}</title>
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
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
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
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 15px;
            margin: 20px;
            border-radius: 6px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .customer-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
            border-left: 4px solid #1E90FF;
        }
        .customer-info h3 {
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
        }
        .btn-primary {
            background-color: #1E90FF;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
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
            <h1>🚨 NEW CONTACT FORM SUBMISSION</h1>
        </div>
        
        <div class="alert">
            ⚠️ A new customer inquiry has been submitted through the contact form. Please respond within 24 hours.
        </div>
        
        <div class="content">
            <div class="timestamp">
                <strong>Submitted:</strong> {{ $submittedAt }}
            </div>
            
            <div class="customer-info">
                <h3>👤 Customer Information</h3>
                <div class="info-row">
                    <span class="info-label">Name:</span> {{ $name }}
                </div>
                <div class="info-row">
                    <span class="info-label">Email:</span> <a href="mailto:{{ $email }}">{{ $email }}</a>
                </div>
                @if($company !== 'Not provided')
                <div class="info-row">
                    <span class="info-label">Company:</span> {{ $company }}
                </div>
                @endif
                @if($phone !== 'Not provided')
                <div class="info-row">
                    <span class="info-label">Phone:</span> <a href="tel:{{ $phone }}">{{ $phone }}</a>
                </div>
                @endif
            </div>
            
            <div class="message-content">
                <strong>📝 Customer Message:</strong><br><br>
                {{ $customerMessage }}
            </div>
            
            <div class="action-buttons">
                <a href="mailto:{{ $email }}?subject=Re: Your inquiry to EPBOX ENGINEERING PTE LTD&body=Dear {{ $name }},%0D%0A%0D%0AThank you for contacting EPBOX ENGINEERING PTE LTD...." class="btn btn-primary">
                    📧 Reply to Customer
                </a>
                <a href="tel:{{ $phone !== 'Not provided' ? $phone : '+6281170088989' }}" class="btn btn-secondary">
                    📞 Call Customer
                </a>
            </div>
            
            <div style="background-color: #d1ecf1; padding: 15px; border-radius: 6px; margin: 20px 0;">
                <strong>💡 Quick Response Tips:</strong><br>
                • Acknowledge receipt within 2 hours<br>
                • Provide initial assessment within 24 hours<br>
                • Schedule consultation if complex requirements<br>
                • Follow up within 48 hours if no response
            </div>
            
            <div style="font-size: 13px; color: #6c757d; margin-top: 20px;">
                <strong>Note:</strong> This email was automatically generated from the EPBOX ENGINEERING PTE LTD contact form. 
                Please ensure timely response to maintain customer satisfaction.
            </div>
        </div>
        
        <div class="footer">
            EPBOX ENGINEERING PTE LTD - Sales Team Notification System<br>
            This is an automated notification. Please do not reply to this email.
        </div>
    </div>
</body>
</html>
