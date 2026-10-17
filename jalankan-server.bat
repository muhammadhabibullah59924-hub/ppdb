@echo off
title PPDB Online - Server Laravel
cd /d "%~dp0"
echo ============================================
 echo   PPDB Online - MI Ihyaul Islam
 echo   Server development Laravel (PHP 8.3)
 echo ============================================
echo.
 echo Buka browser, ketik: http://127.0.0.1:8000
 echo Tekan Ctrl+C untuk menghentikan server.
echo.
"C:\php83\php.exe" artisan serve --host=127.0.0.1 --port=8000
pause
