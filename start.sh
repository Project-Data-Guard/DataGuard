#!/bin/bash
set -e

# Buat file SQLite jika belum ada
mkdir -p database
touch database/database.sqlite

# Jalankan migrasi
php artisan migrate --force

# Cache konfigurasi, route, dan view untuk performa
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Jalankan server
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
