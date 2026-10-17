# 🎓 PPDB Online — MI Ihyaul Islam

Sistem Informasi Penerimaan Peserta Didik Baru, proyek jangka waktu **1 semester** (16 pertemuan) dari kegiatan PKP/PKL.
Masalah yang ditemukan: proses PPDB yang masih **manual** (antre serah berkas,
pencatatan di buku/Excel) sehingga data mudah hilang & pengumuman lambat.

## 📸 Tampilan
Landing page dibuat dengan HTML + CSS murni (tanpa framework) agar mudah dipahami pemula,
kemudian **dimigrasikan ke Laravel** (template Blade) agar pengembangan fitur berikutnya
(formulir, login admin, database) lebih rapi dan terstruktur.

## 📂 Struktur Folder
```
ppdb/
├── app/                    # Kode PHP aplikasi (controller, model, provider)
├── bootstrap/              # Bootstrap aplikasi Laravel
├── config/                 # File konfigurasi (database, app, dll.)
├── database/
│   └── migrations/         # Skema database (users, cache, jobs, dll.)
├── public/                 # Folder yang diakses browser
│   ├── index.php           # Gerbang utama Laravel
│   ├── css/style.css       # Gaya tampilan (dulu di css/)
│   └── images/hero-bg.svg  # Background hero (dulu di images/)
├── resources/views/
│   └── welcome.blade.php   # Landing page (dulu index.html) — template Blade
├── routes/web.php          # Daftar URL/route aplikasi
├── index.html              # Halaman penunjuk cara menjalankan server
├── jalankan-server.bat     # Klik 2× untuk menjalankan server Laravel
├── RENCANA_PROYEK.md       # Rencana per pertemuan (1 semester)
└── README.md
```

## ▶️ Cara Menjalankan
1. Pastikan sudah terpasang PHP 8.3 di `C:\php83` (terpisah dari XAMPP)
   — jika belum, ikuti [RENCANA_PROYEK.md](RENCANA_PROYEK.md)
2. Buka folder `ppdb`, **klik 2× `jalankan-server.bat`**
3. Buka browser, ketik: **http://127.0.0.1:8000**

> Alternatif via terminal: `C:\php83\php.exe artisan serve`
>
> Database MySQL (`db_ppdb`) dijalankan lewat **phpMyAdmin XAMPP**
> (MySQL bawaan XAMPP tetap dipakai untuk menyimpan data).

## 🛠️ Teknologi
- **Laravel 13** — framework PHP (routing, database/Eloquent, Blade template)
- **PHP 8.3** — mesin bahasa server (`C:\php83`)
- **HTML5 · CSS3** — struktur & tampilan halaman
- **MySQL/MariaDB** — penyimpanan data via phpMyAdmin (database `db_ppdb`)
- **XAMPP** — menjalankan MySQL lokal
- **Composer** — pengelola paket PHP (`C:\php83\composer.phar`)
- **GitHub** — penyimpanan & publikasi kode

## 📅 Rencana Proyek
Lihat [RENCANA_PROYEK.md](RENCANA_PROYEK.md)
