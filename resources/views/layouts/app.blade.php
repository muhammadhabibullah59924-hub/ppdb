<!DOCTYPE html>
<!-- ============================================================
     LAYOUT BERSAMA — PPDB ONLINE (MI Ihyaul Islam)
     ------------------------------------------------------------
     File ini adalah "kerangka" semua halaman:
     bagian HEAD, NAVBAR (menu atas), dan FOOTER (bagian bawah).

     Cara pakai di halaman lain (misal welcome.blade.php):
         @@extends('layouts.app')          ← memakai kerangka ini
         @@section('konten') ... @@endsection   ← mengisi isi halaman

     (tanda @@ di atas artinya tanda @ biasa, bukan perintah Blade)

     Bagian yang bisa diisi tiap halaman:
         'judul'   → tulisan di tab browser
         'kepala'  → tambahan di <head> (misal CSS khusus halaman)
         'konten'  → isi halaman (wajib)
         'kaki'    → tambahan <script> di bawah (opsional)
     ============================================================ -->

<html lang="id">

<head>
    <!-- Karakter yang dipakai supaya huruf Indonesia tampil benar -->
    <meta charset="UTF-8">

    <!-- Agar tampilan bagus di layar HP (responsive) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Judul tab browser. Halaman lain bisa menimpanya lewat @section('judul') -->
    <title>@yield('judul', config('app.name'))</title>

    <!-- Deskripsi singkat untuk mesin pencari (Google) -->
    <meta name="description"
          content="Sistem Penerimaan Peserta Didik Baru (PPDB) Online MI Ihyaul Islam — daftar dari rumah tanpa antre.">

    <!-- Font Google: Plus Jakarta Sans (yang bikin tampilan terasa modern).
         Kalau sedang offline, browser otomatis memakai huruf bawaan. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- asset() = helper Laravel yang menunjuk folder public/ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Tempat halaman menambah CSS khusus (opsional) -->
    @yield('kepala')
</head>

<body>

    <!-- ============================================================
         NAVBAR (Menu atas) — menempel di atas saat halaman di-scroll
         ============================================================ -->
    <nav class="navbar">
        <div class="container nav-inner">

            <!-- Logo / nama sekolah -->
            <a href="{{ route('beranda') }}" class="logo">
                <span class="logo-ikon">MI</span>
                <span class="logo-teks">
                    MI Ihyaul Islam
                    <small>PPDB Online</small>
                </span>
            </a>

            <!-- Tombol hamburger (garis tiga) — hanya muncul di layar HP -->
            <button class="tombol-burger" id="tombol-burger"
                    aria-label="Buka menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>

            <!-- Daftar menu. Tiap menu mengarah ke bagian tertentu di landing page.
                 route('beranda') + '#' = aman dipakai dari halaman mana pun. -->
            <ul class="menu" id="menu">
                <li><a href="{{ route('beranda') }}" class="aktif">Beranda</a></li>
                <li><a href="{{ route('beranda') }}#alur">Alur Pendaftaran</a></li>
                <li><a href="{{ route('beranda') }}#jadwal">Jadwal</a></li>
                <li><a href="{{ route('beranda') }}#pengumuman">Pengumuman</a></li>
                <li><a href="{{ route('beranda') }}#faq">FAQ</a></li>
            </ul>

            <!-- Tombol login panitia/admin (halaman login menyusul) -->
            <a href="#" class="btn btn-kecil">Login Panitia</a>
        </div>
    </nav>


    <!-- ============================================================
         ISI HALAMAN — diisi oleh tiap halaman lewat @section('konten')
         ============================================================ -->
    <main>
        @yield('konten')
    </main>


    <!-- ============================================================
         FOOTER (Bagian bawah)
         ============================================================ -->
    <footer class="footer">
        <div class="container footer-isi">

            <div class="footer-kolom footer-perkenalan">
                <span class="logo-ikon footer-ikon">MI</span>
                <h4>PPDB Online</h4>
                <p>Sistem Penerimaan Peserta Didik Baru
                   MI Ihyaul Islam — daftar dari rumah, tanpa antre.</p>
            </div>

            <div class="footer-kolom">
                <h4>Menu</h4>
                <ul class="footer-tautan">
                    <li><a href="{{ route('beranda') }}#alur">Alur Pendaftaran</a></li>
                    <li><a href="{{ route('beranda') }}#jadwal">Jadwal</a></li>
                    <li><a href="{{ route('beranda') }}#pengumuman">Pengumuman</a></li>
                    <li><a href="{{ route('beranda') }}#faq">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-kolom">
                <h4>Kontak Panitia</h4>
                <ul class="footer-tautan">
                    <li>📞 0812-0000-0000</li>
                    <li>✉️ ppdb@mi-ihyaul.sch.id</li>
                    <li>📍 Jl. Pendidikan No. 1, Kota Contoh</li>
                </ul>
            </div>

        </div>
        <p class="copyright">© 2026 PPDB Online — Dibuat untuk Proyek PKP Semester Ganjil</p>
    </footer>


    <!-- ============================================================
         SCRIPT KECIL: membuka/menutup menu di layar HP
         (JavaScript sederhana, tidak pakai library apa pun)
         ============================================================ -->
    <script>
        // Ambil tombol hamburger dan daftar menu berdasarkan id-nya
        const tombolBurger = document.getElementById('tombol-burger');
        const daftarMenu   = document.getElementById('menu');

        // Saat tombol diklik, tampilan menu diperlihatkan/disembunyikan
        tombolBurger.addEventListener('click', function () {
            const sedangBuka = daftarMenu.classList.toggle('terbuka');
            tombolBurger.classList.toggle('aktif');
            tombolBurger.setAttribute('aria-expanded', sedangBuka);
        });

        // Setelah memilih menu, menu otomatis menutup kembali
        daftarMenu.querySelectorAll('a').forEach(function (tautan) {
            tautan.addEventListener('click', function () {
                daftarMenu.classList.remove('terbuka');
                tombolBurger.classList.remove('aktif');
            });
        });
    </script>

    <!-- Tempat halaman menambah <script> tambahan (opsional) -->
    @yield('kaki')

</body>

</html>
