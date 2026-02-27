# 📋 PRODUCTION CHECKLIST - EPBOX ENGINEERING

Dokumen ini berisi checklist lengkap untuk mempersiapkan website EPBOX Engineering ke tahap production.

---

## 🔐 1. ENVIRONMENT CONFIGURATION (.env)

### ✅ Wajib Diubah untuk Production:

```env
# Application Environment
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Application Key (pastikan sudah di-generate)
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_secure_password

# Session Configuration (untuk HTTPS)
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=lax

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=your_email@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"

# Cache & Queue (untuk performance)
CACHE_DRIVER=file
QUEUE_CONNECTION=database

# Logging
LOG_CHANNEL=daily
LOG_LEVEL=error
LOG_DAILY_DAYS=30

# Broadcasting (Pusher untuk Live Chat)
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_key
PUSHER_APP_SECRET=your_pusher_secret
PUSHER_APP_CLUSTER=ap1

# Company Information (untuk SEO)
COMPANY_PHONE=+65 8282 9835
COMPANY_PHONE_ALT=+62 811 7008 8989
COMPANY_EMAIL=sales@epbox-engg.com
COMPANY_ADDRESS=Singapore
COMPANY_STREET=1 Sunview Road Eco-Tech@Sunview
COMPANY_POSTAL=627615
COMPANY_ADDRESS_BATAM=Warna Jaya Business Park blok A1-06, Batam, Kepulauan Riau

# Social Media URLs
LINKEDIN_URL=https://www.linkedin.com/company/epbox-engineering
```

---

## 🛡️ 2. SECURITY SETTINGS

### ✅ Checklist Security:

- [ ] **APP_DEBUG=false** - Pastikan debug mode OFF di production
- [ ] **APP_ENV=production** - Set environment ke production
- [ ] **HTTPS Enabled** - Pastikan website menggunakan SSL/HTTPS
- [ ] **Session Secure Cookie** - Set `SESSION_SECURE_COOKIE=true` di .env
- [ ] **Security Headers** - Middleware `SecurityHeaders` sudah aktif
- [ ] **CSRF Protection** - Sudah aktif secara default di Laravel
- [ ] **SQL Injection Protection** - Gunakan Eloquent/Query Builder (jangan raw SQL)
- [ ] **XSS Protection** - Gunakan `{{ }}` untuk escape output di Blade
- [ ] **File Upload Validation** - Validasi file upload (jika ada)
- [ ] **Rate Limiting** - Aktifkan rate limiting untuk API endpoints
- [ ] **Strong Passwords** - Pastikan admin menggunakan password kuat

### 🔒 Security Headers yang Sudah Dikonfigurasi:
- ✅ X-Frame-Options: SAMEORIGIN
- ✅ X-Content-Type-Options: nosniff
- ✅ Referrer-Policy: strict-origin-when-cross-origin
- ✅ Content-Security-Policy: (dikonfigurasi via middleware)
- ✅ Strict-Transport-Security: (HSTS) - otomatis aktif jika HTTPS

---

## ⚡ 3. PERFORMANCE OPTIMIZATION

### ✅ Checklist Performance:

- [ ] **Optimize Autoloader**
  ```bash
  composer install --optimize-autoloader --no-dev
  ```

- [ ] **Cache Configuration**
  ```bash
  php artisan config:cache
  php artisan route:cache
  php artisan view:cache
  ```

- [ ] **Optimize Composer**
  ```bash
  composer dump-autoload --optimize
  ```

- [ ] **Asset Optimization**
  - ✅ WebP images sudah digunakan
  - ✅ Lazy loading sudah diimplementasikan
  - ✅ CSS/JS sudah di-minify (jika menggunakan build tools)
  - ✅ GZIP compression sudah dikonfigurasi di .htaccess
  - ✅ Browser caching sudah dikonfigurasi

- [ ] **Database Optimization**
  - [ ] Index pada kolom yang sering di-query
  - [ ] Foreign key constraints sudah ada
  - [ ] Database connection pooling (jika perlu)

- [ ] **CDN Configuration** (Opsional)
  - [ ] Setup CDN untuk static assets (CSS, JS, images)
  - [ ] Update asset URLs ke CDN

---

## 📊 4. DATABASE & MIGRATIONS

### ✅ Checklist Database:

- [ ] **Backup Database** - Buat backup sebelum deploy
- [ ] **Run Migrations**
  ```bash
  php artisan migrate --force
  ```
- [ ] **Seed Data** (jika perlu)
  ```bash
  php artisan db:seed --class=YourSeeder
  ```
- [ ] **Check Database Connection** - Test koneksi database
- [ ] **Optimize Tables** (jika perlu)
  ```sql
  OPTIMIZE TABLE table_name;
  ```

---

## 📧 5. EMAIL CONFIGURATION

### ✅ Checklist Email:

- [ ] **SMTP Configuration** - Setup SMTP di .env
- [ ] **Test Email Sending** - Test kirim email
- [ ] **Email Templates** - Pastikan email templates sudah benar
- [ ] **Queue Configuration** - Setup queue untuk email (jika menggunakan queue)
- [ ] **Email Validation** - Pastikan email validation bekerja

### 📝 Email yang Perlu Dikonfigurasi:
- Contact form notifications
- Customer confirmation emails
- Admin notifications

---

## 📝 6. LOGGING & MONITORING

### ✅ Checklist Logging:

- [ ] **Log Channel** - Set `LOG_CHANNEL=daily` di .env
- [ ] **Log Level** - Set `LOG_LEVEL=error` untuk production
- [ ] **Log Rotation** - Set `LOG_DAILY_DAYS=30` (simpan 30 hari)
- [ ] **Error Tracking** - Setup error tracking (Sentry, Bugsnag, dll) - Opsional
- [ ] **Monitoring** - Setup monitoring (UptimeRobot, Pingdom, dll) - Opsional

### 📂 Log Files Location:
- `storage/logs/laravel.log` - Main log file
- `storage/logs/laravel-YYYY-MM-DD.log` - Daily logs

---

## 🔄 7. CACHING

### ✅ Checklist Caching:

- [ ] **Config Cache**
  ```bash
  php artisan config:cache
  ```

- [ ] **Route Cache**
  ```bash
  php artisan route:cache
  ```

- [ ] **View Cache**
  ```bash
  php artisan view:cache
  ```

- [ ] **Application Cache** - Setup cache driver (file, redis, memcached)
- [ ] **Clear Cache After Changes**
  ```bash
  php artisan cache:clear
  php artisan config:clear
  php artisan route:clear
  php artisan view:clear
  ```

---

## 🌐 8. WEB SERVER CONFIGURATION

### ✅ Checklist Web Server:

#### Apache (.htaccess sudah dikonfigurasi):
- ✅ GZIP compression
- ✅ Browser caching
- ✅ Cache-Control headers
- ✅ URL rewriting

#### Nginx (jika menggunakan Nginx):
- [ ] Setup Nginx configuration
- [ ] SSL certificate configuration
- [ ] PHP-FPM configuration
- [ ] Static file serving

---

## 🔍 9. SEO & ANALYTICS

### ✅ Checklist SEO:

- [ ] **Meta Tags** - Sudah diimplementasikan
- [ ] **Structured Data** - Sudah diimplementasikan (JSON-LD)
- [ ] **Sitemap.xml** - Sudah ada (dynamic sitemap)
- [ ] **Robots.txt** - Sudah ada
- [ ] **Google Analytics** - Setup Google Analytics (jika perlu)
- [ ] **Google Search Console** - Submit sitemap ke Google Search Console
- [ ] **Bing Webmaster Tools** - Submit sitemap ke Bing (jika perlu)

---

## 🧪 10. TESTING

### ✅ Checklist Testing:

- [ ] **Functional Testing** - Test semua fitur utama
- [ ] **Cross-Browser Testing** - Test di berbagai browser
- [ ] **Mobile Responsive** - Test di berbagai device
- [ ] **Performance Testing** - Test loading speed
- [ ] **Security Testing** - Test keamanan (jika perlu)
- [ ] **Contact Form** - Test contact form submission
- [ ] **Live Chat** - Test live chat functionality
- [ ] **Email Sending** - Test email sending

---

## 📦 11. DEPLOYMENT

### ✅ Pre-Deployment Checklist:

- [ ] **Backup Current Version** - Backup versi saat ini
- [ ] **Backup Database** - Backup database
- [ ] **Update Dependencies**
  ```bash
  composer update --no-dev --optimize-autoloader
  ```
- [ ] **Run Tests** - Run semua tests (jika ada)
- [ ] **Check .env** - Pastikan .env production sudah benar
- [ ] **Clear Cache** - Clear semua cache
- [ ] **Optimize** - Run optimization commands

### ✅ Deployment Steps:

1. **Upload Files** - Upload semua file ke server
2. **Set Permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   chown -R www-data:www-data storage bootstrap/cache
   ```
3. **Run Migrations**
   ```bash
   php artisan migrate --force
   ```
4. **Cache Configuration**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
5. **Test Website** - Test website setelah deploy

---

## 🔄 12. POST-DEPLOYMENT

### ✅ Checklist Setelah Deploy:

- [ ] **Test Homepage** - Test homepage loading
- [ ] **Test All Pages** - Test semua halaman di navbar
- [ ] **Test Contact Form** - Test form submission
- [ ] **Test Live Chat** - Test live chat
- [ ] **Check Logs** - Check error logs
- [ ] **Monitor Performance** - Monitor website performance
- [ ] **Check SSL** - Pastikan SSL certificate valid
- [ ] **Test Email** - Test email sending
- [ ] **Check SEO** - Verify meta tags dan structured data

---

## 📚 13. DOCUMENTATION

### ✅ Checklist Documentation:

- [ ] **README.md** - Update README dengan instruksi deployment
- [ ] **API Documentation** - Jika ada API
- [ ] **Admin Guide** - Dokumentasi untuk admin
- [ ] **Troubleshooting Guide** - Panduan troubleshooting

---

## 🚨 14. BACKUP STRATEGY

### ✅ Checklist Backup:

- [ ] **Database Backup** - Setup automatic database backup
- [ ] **File Backup** - Setup backup untuk uploads/files
- [ ] **Backup Schedule** - Tentukan jadwal backup (daily/weekly)
- [ ] **Backup Storage** - Tentukan lokasi penyimpanan backup
- [ ] **Backup Testing** - Test restore dari backup

### 💡 Rekomendasi Backup:
- Database: Daily backup, simpan 30 hari
- Files: Weekly backup, simpan 4 minggu
- Full backup: Monthly backup, simpan 6 bulan

---

## 🔧 15. MAINTENANCE MODE

### ✅ Maintenance Mode:

```bash
# Enable maintenance mode
php artisan down

# Disable maintenance mode
php artisan up

# With secret bypass
php artisan down --secret="your-secret-token"
```

---

## 📞 16. SUPPORT & CONTACT

### ✅ Checklist Support:

- [ ] **Contact Information** - Pastikan informasi kontak benar
- [ ] **Support Email** - Setup email untuk support
- [ ] **Error Reporting** - Setup error reporting mechanism
- [ ] **Documentation** - Dokumentasi untuk tim support

---

## ✅ FINAL CHECKLIST

Sebelum go-live, pastikan:

- [ ] Semua checklist di atas sudah ditandai
- [ ] Website sudah di-test secara menyeluruh
- [ ] Backup sudah dibuat
- [ ] SSL certificate sudah aktif
- [ ] Email sudah dikonfigurasi dan di-test
- [ ] Database sudah di-backup
- [ ] Performance sudah dioptimalkan
- [ ] Security sudah dikonfigurasi
- [ ] Monitoring sudah setup (jika perlu)

---

## 🎯 QUICK DEPLOYMENT COMMANDS

```bash
# 1. Install dependencies (production)
composer install --optimize-autoloader --no-dev

# 2. Generate application key (jika belum)
php artisan key:generate

# 3. Run migrations
php artisan migrate --force

# 4. Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 5. Set permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# 6. Clear old cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# 7. Re-cache (setelah clear)
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 📝 NOTES

- **Jangan pernah commit file .env ke repository**
- **Selalu backup sebelum deploy**
- **Test di staging environment dulu sebelum production**
- **Monitor logs setelah deploy**
- **Keep dependencies updated untuk security patches**

---

**Last Updated:** {{ date('Y-m-d') }}
**Version:** 1.0

