#!/bin/bash
set -e

# Buat file SQLite jika belum ada
mkdir -p database
touch database/database.sqlite

# Pastikan storage & bootstrap/cache writable
chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# Debug: cek isi public/build/
echo "=== public/build/ ==="
ls -la public/build/ 2>/dev/null || echo "WARNING: public/build/ tidak ada!"
echo "=== public/build/assets/ ==="
ls -la public/build/assets/ 2>/dev/null || echo "WARNING: public/build/assets/ tidak ada!"

# Build Vite assets jika belum ada (fallback jika nixpacks tidak menyertakannya)
if [ ! -f "public/build/manifest.json" ]; then
    echo ">>> public/build tidak ditemukan, menjalankan npm run build..."
    npm run build
else
    echo ">>> public/build/manifest.json ditemukan, skip build."
fi

# Clear semua cache lama sebelum re-cache dengan env vars terbaru
php artisan optimize:clear

# Jalankan migrasi
php artisan migrate --force

# Cache ulang dengan env vars yang sudah di-set
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Jalankan server
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
