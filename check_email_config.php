<?php

/**
 * Script untuk mengecek konfigurasi email di file .env
 * Usage: php check_email_config.php
 */

$envFile = __DIR__ . '/.env';

if (!file_exists($envFile)) {
    echo "❌ File .env tidak ditemukan!\n";
    echo "📁 Lokasi yang dicek: {$envFile}\n";
    exit(1);
}

// Baca file .env
$envContent = file_get_contents($envFile);
$lines = explode("\n", $envContent);

$mailConfig = [];

foreach ($lines as $line) {
    $line = trim($line);
    
    // Skip komentar dan baris kosong
    if (empty($line) || strpos($line, '#') === 0) {
        continue;
    }
    
    // Parse KEY=VALUE
    if (strpos($line, '=') !== false) {
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);
        
        // Hapus quotes jika ada
        $value = trim($value, '"\'');
        
        if (strpos($key, 'MAIL_') === 0) {
            $mailConfig[$key] = $value;
        }
    }
}

// Tampilkan hasil
echo "📧 Konfigurasi Email di .env:\n";
echo str_repeat("=", 50) . "\n\n";

$requiredKeys = [
    'MAIL_MAILER',
    'MAIL_HOST',
    'MAIL_PORT',
    'MAIL_USERNAME',
    'MAIL_PASSWORD',
    'MAIL_ENCRYPTION',
    'MAIL_FROM_ADDRESS',
    'MAIL_FROM_NAME'
];

$allSet = true;

foreach ($requiredKeys as $key) {
    $value = $mailConfig[$key] ?? null;
    
    if ($value === null || $value === '') {
        echo "❌ {$key}: TIDAK DISET\n";
        $allSet = false;
    } else {
        // Sembunyikan password untuk keamanan
        if ($key === 'MAIL_PASSWORD') {
            $maskedPassword = strlen($value) > 4 
                ? substr($value, 0, 4) . str_repeat('*', strlen($value) - 4)
                : str_repeat('*', strlen($value));
            echo "✅ {$key}: {$maskedPassword}\n";
        } else {
            echo "✅ {$key}: {$value}\n";
        }
    }
}

echo "\n" . str_repeat("=", 50) . "\n";

if ($allSet) {
    echo "✅ Semua konfigurasi email sudah lengkap!\n\n";
    
    // Tips
    echo "💡 Tips:\n";
    echo "   - Pastikan MAIL_PASSWORD menggunakan Google App Password\n";
    echo "   - Untuk membuat App Password: https://myaccount.google.com/apppasswords\n";
    echo "   - Test email dengan: php test_email.php\n";
} else {
    echo "⚠️  Beberapa konfigurasi email belum diset!\n\n";
    
    echo "📝 Contoh konfigurasi untuk Google Workspace:\n";
    echo "   MAIL_MAILER=smtp\n";
    echo "   MAIL_HOST=smtp.gmail.com\n";
    echo "   MAIL_PORT=587\n";
    echo "   MAIL_USERNAME=sales@epbox-engg.com\n";
    echo "   MAIL_PASSWORD=your-app-password-here\n";
    echo "   MAIL_ENCRYPTION=tls\n";
    echo "   MAIL_FROM_ADDRESS=sales@epbox-engg.com\n";
    echo "   MAIL_FROM_NAME=\"EPBox Engineering\"\n";
}

echo "\n";

