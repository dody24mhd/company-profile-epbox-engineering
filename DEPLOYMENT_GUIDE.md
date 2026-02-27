# 🚀 DEPLOYMENT GUIDE - EPBOX ENGINEERING

Panduan lengkap untuk deploy website EPBOX Engineering ke production server.

---

## 📋 PREREQUISITES

Sebelum deploy, pastikan:

1. ✅ Server sudah terinstall:
   - PHP 8.2 atau lebih tinggi
   - Composer
   - MySQL/MariaDB
   - Apache/Nginx
   - SSL Certificate (untuk HTTPS)

2. ✅ Domain sudah dikonfigurasi:
   - DNS records sudah di-set
   - SSL certificate sudah di-install

3. ✅ Database sudah dibuat:
   - Database user sudah dibuat
   - Database permissions sudah di-set

---

## 🔧 SERVER CONFIGURATION

### PHP Requirements

```bash
# Check PHP version
php -v  # Should be 8.2 or higher

# Required PHP extensions:
- BCMath
- Ctype
- cURL
- DOM
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PDO
- Tokenizer
- XML
```

### Composer Installation

```bash
# Install Composer (if not installed)
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

---

## 📦 DEPLOYMENT METHODS

### Method 1: Manual Deployment

1. **Upload Files**
   ```bash
   # Upload all files to server (except .env)
   # Use FTP/SFTP or Git
   ```

2. **Setup Environment**
   ```bash
   # Copy .env.example to .env
   cp .env.example .env
   
   # Edit .env file
   nano .env
   ```

3. **Install Dependencies**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

4. **Generate Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate --force
   ```

6. **Optimize**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

7. **Set Permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   chown -R www-data:www-data storage bootstrap/cache
   ```

### Method 2: Using Deployment Script

```bash
# Make script executable
chmod +x deploy.sh

# Run deployment script
./deploy.sh
```

### Method 3: Using Git (Recommended)

```bash
# On server
cd /path/to/your/project
git pull origin main

# Run deployment commands
composer install --optimize-autoloader --no-dev
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 🔐 ENVIRONMENT CONFIGURATION

### .env File Configuration

```env
APP_NAME="EPBOX Engineering"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

SESSION_DRIVER=database
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=lax

MAIL_MAILER=smtp
MAIL_HOST=smtp.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=your_email@yourdomain.com
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"

LOG_CHANNEL=daily
LOG_LEVEL=error
LOG_DAILY_DAYS=30

BROADCAST_DRIVER=pusher
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_key
PUSHER_APP_SECRET=your_secret
PUSHER_APP_CLUSTER=ap1
```

---

## 🌐 WEB SERVER CONFIGURATION

### Apache Configuration

1. **Document Root**
   ```apache
   DocumentRoot /path/to/your/project/public
   ```

2. **Directory Configuration**
   ```apache
   <Directory /path/to/your/project/public>
       AllowOverride All
       Require all granted
   </Directory>
   ```

3. **.htaccess** sudah ada di `public/.htaccess`

### Nginx Configuration

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name yourdomain.com www.yourdomain.com;
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name yourdomain.com www.yourdomain.com;

    root /path/to/your/project/public;
    index index.php;

    ssl_certificate /path/to/ssl/certificate.crt;
    ssl_certificate_key /path/to/ssl/private.key;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

---

## 🔄 POST-DEPLOYMENT

### 1. Test Website

- [ ] Homepage loads correctly
- [ ] All pages accessible
- [ ] Contact form works
- [ ] Live chat works
- [ ] Email sending works
- [ ] Images load correctly
- [ ] CSS/JS load correctly

### 2. Check Logs

```bash
# Check Laravel logs
tail -f storage/logs/laravel.log

# Check error logs
tail -f /var/log/apache2/error.log  # Apache
tail -f /var/log/nginx/error.log     # Nginx
```

### 3. Monitor Performance

- Use tools like:
  - Google PageSpeed Insights
  - GTmetrix
  - Pingdom
  - UptimeRobot

### 4. Setup Monitoring

- [ ] Setup uptime monitoring
- [ ] Setup error tracking (optional)
- [ ] Setup performance monitoring (optional)

---

## 🚨 TROUBLESHOOTING

### Common Issues

#### 1. 500 Internal Server Error

```bash
# Check permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Check logs
tail -f storage/logs/laravel.log

# Clear cache
php artisan cache:clear
php artisan config:clear
```

#### 2. Database Connection Error

- Check database credentials in .env
- Check database server is running
- Check database user permissions

#### 3. Permission Denied

```bash
# Fix permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### 4. Assets Not Loading

- Check .htaccess is working
- Check file permissions
- Check APP_URL in .env

---

## 🔄 ROLLBACK PROCEDURE

Jika ada masalah setelah deploy:

1. **Restore Files**
   ```bash
   git checkout previous-commit-hash
   # atau restore dari backup
   ```

2. **Restore Database**
   ```bash
   mysql -u username -p database_name < backup.sql
   ```

3. **Clear Cache**
   ```bash
   php artisan cache:clear
   php artisan config:clear
   php artisan route:clear
   php artisan view:clear
   ```

---

## 📝 MAINTENANCE MODE

### Enable Maintenance Mode

```bash
php artisan down
```

### Disable Maintenance Mode

```bash
php artisan up
```

### With Secret Bypass

```bash
php artisan down --secret="your-secret-token"
# Access: https://yourdomain.com/your-secret-token
```

---

## 🔐 SECURITY CHECKLIST

- [ ] APP_DEBUG=false
- [ ] APP_ENV=production
- [ ] HTTPS enabled
- [ ] Strong database password
- [ ] Secure session configuration
- [ ] Security headers active
- [ ] File permissions correct
- [ ] .env file not accessible via web

---

## 📞 SUPPORT

Jika ada masalah:

1. Check logs: `storage/logs/laravel.log`
2. Check server error logs
3. Check Laravel documentation
4. Contact development team

---

**Last Updated:** 2024-01-XX
**Version:** 1.0

