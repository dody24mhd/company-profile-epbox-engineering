<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for contacting EPBOX ENGINEERING PTE LTD</title>
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
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #0F1C3F 0%, #1E90FF 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 900;
            letter-spacing: 0.5px;
        }

        .content {
            padding: 30px 20px;
        }

        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #0F1C3F;
        }

        .message {
            font-size: 16px;
            margin-bottom: 25px;
            color: #555;
        }

        .details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
            border-left: 4px solid #1E90FF;
        }

        .details h3 {
            margin: 0 0 15px 0;
            color: #0F1C3F;
            font-size: 16px;
        }

        .detail-row {
            margin-bottom: 8px;
            font-size: 14px;
        }

        .detail-label {
            font-weight: bold;
            color: #333;
        }

        .footer {
            background-color: #0F1C3F;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }

        .footer a {
            color: #1E90FF;
            text-decoration: none;
        }

        .contact-info {
            margin-top: 15px;
            font-size: 13px;
            color: #ccc;
        }

        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://epbox-engg.com/img/logo2.png" alt="EPBOX ENGINEERING PTE LTD" class="logo">
            <h1>EPBOX ENGINEERING PTE LTD</h1>
        </div>

        <div class="content">
            <div class="greeting">Dear {{ $name ?? 'Valued Customer' }},</div>

            <div class="message">
                Thank you for reaching out to EPBOX ENGINEERING PTE LTD!
            </div>

            <div class="message">
                We have received your message, and our team will review your inquiry within the next 24 hours.
            </div>

            <div class="details">
                <h3>Inquiry Details:</h3>
                <div class="detail-row">
                    <span class="detail-label">Name:</span> {{ $name ?? 'Not provided' }}
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email:</span> {{ $email ?? 'Not provided' }}
                </div>
                <div class="detail-row">
                    <span class="detail-label">Company:</span> {{ $company ?? 'Not provided' }}
                </div>
                <div class="detail-row">
                    <span class="detail-label">Phone:</span> {{ $phone ?? 'Not provided' }}
                </div>
                <div class="detail-row">
                    <span class="detail-label">Message:</span><br>
                    <div style="margin-top: 5px; font-style: italic;">{{ $customerMessage ?? 'No message provided' }}</div>
                </div>
            </div>

            <div class="message">
                We appreciate your patience, and we look forward to assisting you soon! Should you need immediate assistance, please feel free to contact us directly.
            </div>

            <div class="message" style="margin-top: 30px;">
                Best regards,<br>
                <strong>EPBOX ENGINEERING PTE LTD</strong>
            </div>
        </div>

        <div class="footer">
            <div>EPBOX ENGINEERING PTE LTD - Industrial Automation Solutions</div>
            <div class="contact-info">
                Singapore: 1 Sunview Road Eco-Tech@sunview, Singapore 627615<br>
                Batam: Warna Jaya Business Park blok A1-06, Batam, Kepulauan Riau<br>
                Email: <a href="mailto:sales@epbox-engg.com">sales@epbox-engg.com</a> |
                Phone: <a href="tel:+6281170088989">+62 811 7008 8989</a> / <a href="tel:+6582829835">+65 8282 9835</a>
            </div>
        </div>
    </div>
</body>

</html>