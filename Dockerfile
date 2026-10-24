
# Build frontend assets
FROM node:24-alpine AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build

# Run Laravel with PHP 8.4 and Nginx
FROM serversideup/php:8.4-fpm-nginx

USER root
WORKDIR /var/www/html

COPY . .

# Copy the compiled frontend assets
COPY --from=frontend /app/public/build ./public/build

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr

# Install PHP dependencies
RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    && chown -R www-data:www-data storage bootstrap/cache

USER www-data
ENV PHP_OUTPUT_BUFFERING=4096