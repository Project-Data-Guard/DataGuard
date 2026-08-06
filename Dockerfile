FROM php:8.3-cli

# Install dependency sistem
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libzip-dev \
    nodejs \
    npm \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Install dependency PHP
RUN composer install --no-dev --optimize-autoloader

# Install dependency Node
RUN npm install

# Build asset Vite
RUN npm run build

# Permission
RUN chmod +x start.sh

EXPOSE 10000

CMD ["bash", "start.sh"]