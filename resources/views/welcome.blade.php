{{-- ============================================================
     LANDING PAGE — PPDB ONLINE (MI Ihyaul Islam)
     ------------------------------------------------------------
     File ini hanya berisi ISI halaman (bagian tengahnya saja).
     Navbar & footer ada di file lain:
         resources/views/layouts/app.blade.php

     @extends  = memakai kerangka layout
     @section = mengisi bagian tertentu dari layout
     ============================================================ --}}

@extends('layouts.app')

@section('judul', 'PPDB Online — MI Ihyaul Islam')


{{-- ============================================================
     BAGIAN 1 : HERO (Bagian besar paling atas)
     Berisi judul, keterangan singkat, dan tombol aksi.
     ============================================================ --}}
@section('konten')

<header class="hero" id="beranda">
    <div class="container hero-isi">

        <p class="badge">📅 Tahun Ajaran 2026 / 2027</p>

        <h1>Penerimaan Peserta Didik Baru <span>100% Online</span></h1>

        <p class="hero-teks">
            Daftar dari rumah tanpa antre, unggah berkas dengan mudah,
            dan pantau hasil seleksi secara transparan.
        </p>

        {{-- Dua tombol utama. Tombol "Daftar" diarahkan ke halaman
             formulir yang akan dibuat pada pertemuan berikutnya. --}}
        <div class="hero-tombol">
            <a href="#" class="btn btn-utama">📝 Daftar Sekarang</a>
            <a href="#alur" class="btn btn-kosong">Lihat Alur →</a>
        </div>

        {{-- Keterangan singkat yang menenangkan calon siswa --}}
        <div class="chips">
            <span class="chip">✅ Pendaftaran Gratis</span>
            <span class="chip">📱 Bisa dari HP</span>
            <span class="chip">🔒 Data Aman</span>
        </div>

    </div>
</header>

{{-- ============================================================
     BAGIAN 2 : ALUR PENDAFTARAN
     Terdiri dari 4 kartu (card) berurutan.
     Triknya : tiap kartu dibungkus <div class="kartu">
     ============================================================ --}}
<section class="bagian" id="alur">
    <div class="container">
        <h2 class="judul-bagian">Alur Pendaftaran</h2>
        <p class="sub-judul">Hanya 4 langkah mudah, bisa dari HP masing-masing</p>

        <div class="grid grid-4">

            <div class="kartu">
                <div class="kartu-angka">1</div>
                <h3>Buat Akun</h3>
                <p>Daftar memakai email dan NISN untuk membuat akun pendaftar.</p>
            </div>

            <div class="kartu">
                <div class="kartu-angka">2</div>
                <h3>Isi Formulir</h3>
                <p>Lengkapi data diri, data orang tua, dan pilihan jurusan.</p>
            </div>

            <div class="kartu">
                <div class="kartu-angka">3</div>
                <h3>Unggah Berkas</h3>
                <p>Scan rapor, akta kelahiran, dan KK lalu unggah ke sistem.</p>
            </div>

            <div class="kartu">
                <div class="kartu-angka">4</div>
                <h3>Cek Pengumuman</h3>
                <p>Pantau status verifikasi dan lihat hasil seleksi tepat waktu.</p>
            </div>

        </div>
    </div>
</section>


{{-- ============================================================
     BAGIAN 3 : JADWAL
     Menggunakan tabel <table> karena data berbentuk baris-baris.
     ============================================================ --}}
<section class="bagian abu" id="jadwal">
    <div class="container">
        <h2 class="judul-bagian">Jadwal Penting</h2>
        <p class="sub-judul">Catat tanggalnya, jangan sampai terlewat!</p>

        <table class="tabel">
            <thead>
                <tr>
                    <th>Kegiatan</th>
                    <th>Gelombang 1</th>
                    <th>Gelombang 2</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pendaftaran Daring</td>
                    <td>1 – 15 Mei</td>
                    <td>16 – 30 Mei</td>
                    <td><span class="tag tag-buka">Dibuka</span></td>
                </tr>
                <tr>
                    <td>Verifikasi Berkas</td>
                    <td>16 – 18 Mei</td>
                    <td>31 Mei – 2 Juni</td>
                    <td><span class="tag tag-proses">Proses</span></td>
                </tr>
                <tr>
                    <td>Pengumuman Seleksi</td>
                    <td>22 Mei</td>
                    <td>6 Juni</td>
                    <td><span class="tag tag-tutup">Belum</span></td>
                </tr>
                <tr>
                    <td>Daftar Ulang</td>
                    <td>23 – 25 Mei</td>
                    <td>7 – 9 Juni</td>
                    <td><span class="tag tag-tutup">Belum</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>


{{-- ============================================================
     BAGIAN 4 : PENGUMUMAN + FAQ (dua kolom berdampingan)
     ============================================================ --}}
<section class="bagian" id="pengumuman">
    <div class="container dua-kolom">

        {{-- Kolom kiri : daftar pengumuman --}}
        <div>
            <h2 class="judul-bagian kiri">Pengumuman Terbaru</h2>

            <div class="kartu pengumuman">
                <span class="tag tag-buka">Penting</span>
                <h3>Pendaftaran Gelombang 1 Dibuka</h3>
                <p>Pendaftaran daring dibuka mulai 1 Mei pukul 08.00 WIB.</p>
            </div>

            <div class="kartu pengumuman">
                <span class="tag tag-proses">Info</span>
                <h3>Perpanjangan Batas Unggah Berkas</h3>
                <p>Batas unggah berkas diperpanjang hingga 14 Mei.</p>
            </div>

            <div class="kartu pengumuman">
                <span class="tag tag-baru">Baru</span>
                <h3>Pengumuman Kelulusan Gelombang 2</h3>
                <p>Dapat dilihat melalui menu "Cek Hasil" menggunakan NISN.</p>
            </div>
        </div>

        {{-- Kolom kanan : tanya jawab (FAQ) --}}
        <div id="faq">
            <h2 class="judul-bagian kiri">FAQ</h2>

            {{-- <details> = bisa dibuka/tutup tanpa JavaScript --}}
            <details class="faq">
                <summary>Apakah pendaftaran dipungut biaya?</summary>
                <p>Tidak. PPDB online ini gratis, hati-hati terhadap pungutan.</p>
            </details>

            <details class="faq">
                <summary>Bisa mendaftar lewat HP?</summary>
                <p>Bisa. Halaman ini responsif sehingga nyaman dibuka di HP.</p>
            </details>

            <details class="faq">
                <summary>Berkas apa saja yang dibutuhkan?</summary>
                <p>Akta kelahiran, kartu keluarga, rapor, dan pas foto 3×4.</p>
            </details>

            <details class="faq">
                <summary>Lupa kata sandi akun?</summary>
                <p>Gunakan menu "Lupa Password" atau hubungi panitia PPDB.</p>
            </details>
        </div>

    </div>
</section>


{{-- ============================================================
     BAGIAN 5 : AJAKAN MENDAFTAR (Call to Action)
     ============================================================ --}}
<section class="cta">
    <div class="container">
        <h2>Siap Mendaftar?</h2>
        <p>Siapkan berkas kamu, lalu daftar sekarang juga.</p>
        <a href="#" class="btn btn-utama">📝 Mulai Pendaftaran</a>
    </div>
</section>

@endsection
