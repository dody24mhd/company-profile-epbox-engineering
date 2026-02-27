# 🔧 SOLUSI CONNECTION TIMEOUT - VPS EPBOX ENGINEERING

## 📋 MASALAH YANG DIALAMI

- **Gejala**: Connection timeout saat pertama kali akses website
- **Setelah timeout**: Website loading dengan cepat
- **Domain**: epbox-engg.com
- **Server**: VPS (bukan Vercel lagi)

## 🔍 ANALISIS MASALAH

Masalah ini biasanya disebabkan oleh:

1. **PHP-FPM Cold Start** - Process PHP-FPM di-kill setelah tidak aktif, request pertama harus spawn process baru (lambat)
2. **Timeout Settings Terlalu Rendah** - Nginx/Apache timeout terlalu pendek
3. **Database Connection Timeout** - Koneksi database timeout saat idle
4. **Resource Constraints** - Memory/CPU VPS terbatas
5. **OPcache Belum Optimal** - PHP harus compile ulang setiap request

---

## ✅ SOLUSI 1: KONFIGURASI PHP-FPM

### A. Edit File PHP-FPM Pool Configuration

Lokasi file biasanya di:
- `/etc/php/8.2/fpm/pool.d/www.conf` (PHP 8.2)
- `/etc/php/8.1/fpm/pool.d/www.conf` (PHP 8.1)
- `/etc/php/8.0/fpm/pool.d/www.conf` (PHP 8.0)

```bash
# Edit file konfigurasi
sudo nano /etc/php/8.2/fpm/pool.d/www.conf
```

### B. Ubah Setting Berikut:

```ini
; ===== PROCESS MANAGEMENT =====
; Jangan gunakan ondemand, gunakan dynamic atau static
pm = dynamic

; Jumlah minimum idle processes (selalu siap)
pm.start_servers = 3

; Jumlah minimum idle processes
pm.min_spare_servers = 2

; Jumlah maksimum idle processes
pm.max_spare_servers = 5

; Jumlah maksimum worker processes
pm.max_children = 20

; ===== TIMEOUT SETTINGS =====
; Request timeout (dalam detik) - naikkan dari default 30
request_terminate_timeout = 300

; Process idle timeout (dalam detik) - jangan terlalu cepat kill process
pm.process_idle_timeout = 60s

; ===== PERFORMANCE =====
; Clear environment untuk security (opsional)
clear_env = no

; ===== LOGGING =====
; Enable slow log untuk debugging
slowlog = /var/log/php8.2-fpm.log.slow
request_slowlog_timeout = 10s
```

### C. Restart PHP-FPM

```bash
sudo systemctl restart php8.2-fpm
# atau
sudo systemctl restart php-fpm
```

---

## ✅ SOLUSI 2: KONFIGURASI NGINX

### A. Edit File Nginx Configuration

```bash
sudo nano /etc/nginx/sites-available/epbox-engg.com
# atau
sudo nano /etc/nginx/nginx.conf
```

### B. Tambahkan/Update Setting Berikut:

```nginx
server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name epbox-engg.com www.epbox-engg.com;

    root /path/to/your/project/public;
    index index.php;

    # ===== TIMEOUT SETTINGS =====
    # Naikkan timeout untuk menghindari connection timeout
    fastcgi_read_timeout 300;
    fastcgi_send_timeout 300;
    fastcgi_connect_timeout 300;
    
    # Client timeout
    client_body_timeout 300;
    client_header_timeout 300;
    send_timeout 300;
    keepalive_timeout 65;

    # ===== PHP-FPM CONFIGURATION =====
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        
        # Timeout settings
        fastcgi_read_timeout 300;
        fastcgi_send_timeout 300;
        fastcgi_connect_timeout 300;
        
        # Buffer settings untuk performance
        fastcgi_buffer_size 128k;
        fastcgi_buffers 4 256k;
        fastcgi_busy_buffers_size 256k;
    }

    # ===== STATIC FILES =====
    location ~* \.(jpg|jpeg|png|gif|ico|css|js|svg|woff|woff2|ttf|eot)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
        access_log off;
    }

    # ===== LARAVEL ROUTING =====
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    # ===== SECURITY =====
    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### C. Test & Reload Nginx

```bash
# Test konfigurasi
sudo nginx -t

# Reload jika test berhasil
sudo systemctl reload nginx
```

---

## ✅ SOLUSI 3: KONFIGURASI APACHE (Jika Menggunakan Apache)

### A. Edit File Apache Configuration

```bash
sudo nano /etc/apache2/sites-available/epbox-engg.com.conf
# atau
sudo nano /etc/apache2/apache2.conf
```

### B. Tambahkan/Update Setting Berikut:

```apache
<VirtualHost *:443>
    ServerName epbox-engg.com
    ServerAlias www.epbox-engg.com
    
    DocumentRoot /path/to/your/project/public
    
    # ===== TIMEOUT SETTINGS =====
    Timeout 300
    ProxyTimeout 300
    
    # ===== PHP-FPM CONFIGURATION =====
    <FilesMatch \.php$>
        SetHandler "proxy:unix:/var/run/php/php8.2-fpm.sock|fcgi://localhost"
    </FilesMatch>
    
    # ===== DIRECTORY SETTINGS =====
    <Directory /path/to/your/project/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### C. Enable Modules & Restart

```bash
sudo a2enmod proxy_fcgi setenvif
sudo a2enmod rewrite
sudo systemctl restart apache2
```

---

## ✅ SOLUSI 4: OPTIMASI PHP OPcache

### A. Edit File php.ini

```bash
sudo nano /etc/php/8.2/fpm/php.ini
# atau
sudo nano /etc/php/8.2/cli/php.ini
```

### B. Update OPcache Settings:

```ini
; ===== OPcache Configuration =====
opcache.enable=1
opcache.enable_cli=0
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=20000
opcache.validate_timestamps=0
opcache.save_comments=1
opcache.fast_shutdown=1
opcache.enable_file_override=1
opcache.optimization_level=0x7FFFBFFF
```

### C. Restart PHP-FPM

```bash
sudo systemctl restart php8.2-fpm
```

---

## ✅ SOLUSI 5: OPTIMASI DATABASE CONNECTION

### A. Edit File `.env` di Server

```bash
cd /path/to/your/project
nano .env
```

### B. Update Database Settings:

```env
# Database Connection
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Connection Pool Settings
DB_STRICT_MODE=false
DB_OPTIONS=JSON_OBJECT('connect_timeout', 10)
```

### C. Edit File `config/database.php` (Opsional)

Tambahkan connection timeout:

```php
'mysql' => [
    // ... existing config ...
    'options' => [
        PDO::ATTR_TIMEOUT => 10,
        PDO::ATTR_PERSISTENT => false,
    ],
],
```

---

## ✅ SOLUSI 6: LARAVEL OPTIMIZATION

### A. Cache Semua Konfigurasi

```bash
cd /path/to/your/project

# Cache config
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize --classmap-authoritative
```

### B. Set Permissions

```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---

## ✅ SOLUSI 7: MONITORING & DEBUGGING

### A. Check PHP-FPM Status

```bash
# Check status
sudo systemctl status php8.2-fpm

# Check process count
ps aux | grep php-fpm

# Check slow log
sudo tail -f /var/log/php8.2-fpm.log.slow
```

### B. Check Nginx/Apache Logs

```bash
# Nginx error log
sudo tail -f /var/log/nginx/error.log

# Apache error log
sudo tail -f /var/log/apache2/error.log

# Laravel log
tail -f storage/logs/laravel.log
```

### C. Check Resource Usage

```bash
# Check memory usage
free -h

# Check CPU usage
top
# atau
htop

# Check disk space
df -h
```

---

## ✅ SOLUSI 8: FIREWALL & NETWORK

### A. Check Firewall Rules

```bash
# UFW (Ubuntu)
sudo ufw status
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp

# Firewalld (CentOS/RHEL)
sudo firewall-cmd --list-all
sudo firewall-cmd --permanent --add-service=http
sudo firewall-cmd --permanent --add-service=https
sudo firewall-cmd --reload
```

### B. Check DNS Resolution

```bash
# Test DNS
nslookup epbox-engg.com
dig epbox-engg.com

# Test connection
curl -I https://epbox-engg.com
```

---

## 📊 CHECKLIST PERBAIKAN

Gunakan checklist ini untuk memastikan semua sudah dikonfigurasi:

- [ ] PHP-FPM pool configuration sudah diupdate (pm = dynamic, timeout dinaikkan)
- [ ] Nginx/Apache timeout settings sudah dinaikkan (300 detik)
- [ ] PHP OPcache sudah dioptimalkan
- [ ] Laravel cache sudah di-generate (config, route, view)
- [ ] Database connection timeout sudah dikonfigurasi
- [ ] File permissions sudah benar (storage, bootstrap/cache)
- [ ] Firewall sudah dikonfigurasi dengan benar
- [ ] SSL certificate sudah valid
- [ ] Server resources (memory, CPU) cukup
- [ ] Logs sudah dicek untuk error

---

## 🚨 TROUBLESHOOTING LANJUTAN

### Jika Masih Timeout:

1. **Check Server Resources**
   ```bash
   # Memory
   free -h
   
   # CPU
   top
   
   # Disk I/O
   iostat -x 1
   ```

2. **Check PHP-FPM Process Count**
   ```bash
   # Lihat berapa process aktif
   ps aux | grep php-fpm | wc -l
   
   # Jika terlalu banyak, kurangi pm.max_children
   ```

3. **Enable Debug Mode Sementara**
   ```bash
   # Di .env
   APP_DEBUG=true
   LOG_LEVEL=debug
   
   # Check logs
   tail -f storage/logs/laravel.log
   ```

4. **Test dengan curl**
   ```bash
   # Test response time
   time curl -I https://epbox-engg.com
   
   # Test dengan verbose
   curl -v https://epbox-engg.com
   ```

---

## 📝 CATATAN PENTING

1. **Jangan set timeout terlalu tinggi** - Bisa menyebabkan resource exhaustion
2. **Monitor server resources** - Pastikan memory dan CPU cukup
3. **Backup sebelum perubahan** - Selalu backup konfigurasi sebelum edit
4. **Test setelah perubahan** - Test website setelah setiap perubahan
5. **Gunakan monitoring tools** - Setup monitoring untuk track performance

---

## 🔗 REFERENSI

- [PHP-FPM Configuration](https://www.php.net/manual/en/install.fpm.configuration.php)
- [Nginx FastCGI Documentation](https://nginx.org/en/docs/http/ngx_http_fastcgi_module.html)
- [Laravel Optimization](https://laravel.com/docs/optimization)

---

**Last Updated**: 2024-12-XX
**Version**: 1.0

