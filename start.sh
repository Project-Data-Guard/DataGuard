#!/bin/bash
set -e

echo "===== Laravel Startup ====="

mkdir -p storage/framework/cache
mkdir -p storage/framework/views
mkdir -p storage/framework/sessions
mkdir -p bootstrap/cache

chmod -R 775 storage bootstrap/cache || true

php artisan optimize:clear

if [ -n "$APP_KEY" ]; then
    php artisan config:cache
fi

php artisan migrate --force || true

php artisan route:cache || true
php artisan view:cache || true

php artisan serve \
    --host=0.0.0.0 \
    --port=${PORT:-10000}