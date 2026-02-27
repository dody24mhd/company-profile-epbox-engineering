# ✅ SETUP GOOGLE SEARCH CONSOLE VERIFICATION

## Verification Code yang Diterima:
```
wTXTvj_OnR2I0M_pwiGpMbFSZPUoYTMQ8TwlSCXjMig
```

---

## 📝 LANGKAH-LANGKAH SETUP

### **LANGKAH 1: Tambahkan ke File .env**

1. Buka file `.env` di root project Anda
2. Tambahkan baris berikut di bagian bawah file:

```env
GOOGLE_SEARCH_CONSOLE_VERIFICATION=wTXTvj_OnR2I0M_pwiGpMbFSZPUoYTMQ8TwlSCXjMig
```

3. **Simpan file** `.env`

### **LANGKAH 2: Clear Cache Laravel**

Jalankan command berikut di terminal:

```bash
php artisan config:clear
```

Atau jika menggunakan cache:

```bash
php artisan config:cache
```

### **LANGKAH 3: Verifikasi di Google Search Console**

1. Kembali ke **Google Search Console**
2. Klik tombol **"Verify"**
3. Google akan membaca meta tag dari homepage Anda
4. Jika berhasil, Anda akan melihat pesan "Ownership verified"

---

## ✅ CEK APAKAH META TAG SUDAH MUNCUL

### **Method 1: View Source Browser**
1. Buka website: `https://epbox-engg.com`
2. Klik kanan → **"View Page Source"** (atau tekan `Ctrl+U`)
3. Cari: `google-site-verification`
4. Pastikan ada meta tag:
   ```html
   <meta name="google-site-verification" content="wTXTvj_OnR2I0M_pwiGpMbFSZPUoYTMQ8TwlSCXjMig" />
   ```

### **Method 2: Inspect Element**
1. Buka website: `https://epbox-engg.com`
2. Tekan `F12` untuk buka Developer Tools
3. Klik tab **"Elements"** (atau **"Inspector"**)
4. Cari di bagian `<head>` → pastikan ada meta tag verification

---

## ⚠️ TROUBLESHOOTING

### **Jika Verification Gagal:**

1. **Pastikan file .env sudah disimpan**
   - Cek apakah baris sudah ditambahkan
   - Pastikan tidak ada spasi sebelum/ setelah `=`

2. **Clear cache lagi:**
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

3. **Restart web server** (jika menggunakan local server):
   ```bash
   php artisan serve
   ```

4. **Cek apakah meta tag muncul di source code:**
   - View page source di browser
   - Pastikan meta tag ada di `<head>` section

5. **Pastikan website sudah di-deploy:**
   - Jika masih di localhost, Google tidak bisa akses
   - Pastikan website sudah live di `https://epbox-engg.com`

---

## 🎯 SETELAH VERIFICATION BERHASIL

Setelah verification berhasil, lanjutkan dengan:

1. **Submit Sitemap:**
   - Di Google Search Console, klik **"Sitemaps"**
   - Masukkan: `sitemap.xml`
   - Klik **"Submit"**

2. **Request Indexing:**
   - Klik **"URL Inspection"**
   - Masukkan: `https://epbox-engg.com`
   - Klik **"Request Indexing"**

3. **Tunggu 1-7 hari** untuk Google mulai meng-index website

---

## 📋 CHECKLIST

- [ ] Tambahkan `GOOGLE_SEARCH_CONSOLE_VERIFICATION` ke file `.env`
- [ ] Clear cache: `php artisan config:clear`
- [ ] Cek meta tag muncul di source code homepage
- [ ] Klik "Verify" di Google Search Console
- [ ] Verification berhasil ✅
- [ ] Submit sitemap.xml
- [ ] Request indexing untuk homepage

---

**Selamat! Setelah verification berhasil, website Anda akan mulai di-index Google! 🎉**

