<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank you for contacting EPBOX ENGINEERING PTE LTD</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    
    <div style="background: #3B82F6; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;">
        <h1 style="margin: 0; font-size: 24px;">EPBOX ENGINEERING PTE LTD</h1>
    </div>
    
    <div style="background: #f9f9f9; padding: 20px; border-radius: 0 0 8px 8px;">
        <h2 style="color: #3B82F6; margin-top: 0;">Thank You for Your Inquiry!</h2>
        
        <p>Dear {{ $name ?? 'Valued Customer' }},</p>
        
        <p>Thank you for reaching out to EPBOX ENGINEERING PTE LTD! We have received your message, and our team will review your inquiry within the next 24 hours.</p>
        
        <div style="background: white; padding: 15px; border-radius: 5px; margin: 20px 0;">
            <h3 style="color: #3B82F6; margin-top: 0;">Your Inquiry Details:</h3>
            <p><strong>Name:</strong> {{ $name ?? 'Not provided' }}</p>
            <p><strong>Email:</strong> {{ $email ?? 'Not provided' }}</p>
            @if(($company ?? 'Not provided') !== 'Not provided')
            <p><strong>Company:</strong> {{ $company ?? 'Not provided' }}</p>
            @endif
            @if(($phone ?? 'Not provided') !== 'Not provided')
            <p><strong>Phone:</strong> {{ $phone ?? 'Not provided' }}</p>
            @endif
            <p><strong>Message:</strong><br>{{ $customerMessage ?? 'No message provided' }}</p>
        </div>
        
        <p><strong>What happens next?</strong></p>
        <ul>
            <li>Our technical team will review your requirements</li>
            <li>We'll prepare a customized solution proposal</li>
            <li>You'll receive a detailed response within 24 hours</li>
        </ul>
        
        <p>If you have any urgent questions, please don't hesitate to contact us directly.</p>
        
        <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd;">
            <p style="color: #666; font-size: 14px;">
                <strong>EPBOX ENGINEERING PTE LTD</strong><br>
                Singapore & Batam, Indonesia<br>
                Email: sales@epbox-engg.com
            </p>
        </div>
    </div>
    
</body>
</html>
