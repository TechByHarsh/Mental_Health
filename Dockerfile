FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    libpq-dev \
    nodejs \
    npm

RUN docker-php-ext-install zip pdo pdo_pgsql pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

# IMPORTANT FIX
RUN a2enmod rewrite

# IMPORTANT FIX
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf

RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

EXPOSE 10000

CMD php artisan migrate --force && \
    php artisan config:cache && \
    apache2-foreground