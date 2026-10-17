# 📅 RENCANA PROYEK — Sistem PPDB Online
### (Rancangan Jangka Waktu 1 Semester / 16 Pertemuan)

---

## 🎯 Judul Proyek
**Sistem Informasi Penerimaan Peserta Didik Baru (PPDB) Online Berbasis Web — MI Ihyaul Islam**

## 🐛 Masalah yang ditemukan di PKL
> Proses PPDB di sekolah masih manual: calon siswa mengantre untuk menyerahkan
> berkas, panitia mencatat data di buku/Excel, sehingga data mudah hilang,
> duplikat, dan pengumuman hasil seleksi lambat disampaikan.

## 🌟 Tujuan Proyek
1. Membuat sistem pendaftaran siswa baru secara online (tanpa antre).
2. Data tersimpan rapi dan tidak ganda (terhubung database).
3. Panitia bisa memverifikasi berkas lewat dashboard admin.
4. Hasil seleksi dapat diumumkan dan dicek sendiri oleh calon siswa.

---

## 🗂️ Empat Tahap Besar

| Tahap | Nama Tahap | Pertemuan |
|-------|-------------------|-----------|
| 1 | Analisis & Perancangan | Pertemuan 1 – 4 |
| 2 | Desain Tampilan (UI) | Pertemuan 5 – 8 |
| 3 | Pengembangan Fitur | Pertemuan 9 – 12 |
| 4 | Pengujian & Publikasi | Pertemuan 13 – 16 |

---

## 📌 Rincian Setiap Pertemuan

### TAHAP 1 — Analisis & Perancangan (Pertemuan 1–4)

| Pertemuan | Kegiatan | *Deliverable* (Hasil yang dikumpulkan) |
|-----------|----------|------------------------------------------|
| 1 | Observasi awal di tempat PKL, mencatat masalah PPDB manual | Catatan observasi / foto kegiatan |
| 2 | Wawancara panitia: apa saja kendala & apa yang dibutuhkan | Hasil wawancara |
| 3 | Menyusun alur kerja PPDB (flowchart) | Flowchart proses PPDB |
| 4 | Membuat daftar fitur & struktur database (ERD) | Dokumen kebutuhan + ERD |

### TAHAP 2 — Desain Tampilan (Pertemuan 5–8)

| Pertemuan | Kegiatan | *Deliverable* |
|-----------|----------|---------------|
| 5 | Membuat wireframe (sketsa kasar) di kertas/Figma | Sketsa halaman |
| 6 | **Membuat tampilan awal: landing page (HTML + CSS)** ✅ | `index.html` |
| 7 | Merapikan CSS, mempelajari *layout* & warna | `style.css` |
| 8 | Membuat tampilan responsive (bisa dibuka di HP) | Landing page responsif |

### TAHAP 3 — Pengembangan Fitur (Pertemuan 9–12)

| Pertemuan | Kegiatan | *Deliverable* |
|-----------|----------|---------------|
| 9 | Instalasi XAMPP + MySQL, membuat database `db_ppdb` | Database + tabel |
| 10 | Halaman formulir pendaftaran & menyimpan data ke database | Fitur pendaftaran |
| 11 | Login admin + dashboard verifikasi berkas | Fitur admin |
| 12 | Pengumuman hasil seleksi & pencarian NISN | Fitur pengumuman |

### TAHAP 4 — Pengujian & Publikasi (Pertemuan 13–16)

| Pertemuan | Kegiatan | *Deliverable* |
|-----------|----------|---------------|
| 13 | Pengujian (testing) setiap fitur + perbaikan bug | Laporan pengujian |
| 14 | Keamanan dasar: *input sanitization*, password terhash | Versi aman |
| 15 | Upload ke GitHub + penulisan dokumentasi README | Repo GitHub rapi |
| 16 | Presentasi hasil & penyelesaian laporan PKP | PPT + Laporan akhir |

---

## 🧰 Teknologi yang Digunakan
- **HTML5** — struktur halaman
- **CSS3** — tampilan/hiasan halaman
- **PHP 8.3** (`C:\php83`) — logika program (terpisah dari PHP 5.6 bawaan XAMPP)
- **Laravel 13** — framework PHP: routing (`routes/web.php`), view Blade (`resources/views/`), database Eloquent
- **MySQL/MariaDB** — penyimpanan data via phpMyAdmin (database `db_ppdb`, sudah dibuat)
- **XAMPP** — server MySQL lokal di laptop
- **Composer** — pengelola paket Laravel
- **GitHub** — penyimpanan & publikasi kode

> 📌 **Catatan migrasi:** sesuai keputusan, proyek menggunakan **Laravel**
> (bukan PHP native). Jalankan server dengan klik 2× `jalankan-server.bat`
> lalu buka `http://127.0.0.1:8000`.

## ✅ Status Proyek
- [x] Pertemuan 1–4 : Analisis & Perancangan
- [x] Pertemuan 5 : Wireframe
- [x] Pertemuan 6 : **Tampilan awal (landing page)** ← posisi sekarang
- [ ] Pertemuan 7 : Perapian CSS
- [ ] Pertemuan 8 : Responsive
- [ ] Pertemuan 9 : Database `db_ppdb` + tabel (migrasi Laravel)
- [ ] Pertemuan 10 : Formulir pendaftaran (model, controller, validasi)
- [ ] Pertemuan 11–16 : tahap berikutnya

> 📝 **Catatan (17 Okt 2026):** Proyek disusun ulang dari tampilan awal.
> Fitur pendaftaran (form, database, controller) dilepas dulu agar tiap
> pertemuan terlihat bertahap di GitHub. Fitur menyusul di pertemuan 9–12.
