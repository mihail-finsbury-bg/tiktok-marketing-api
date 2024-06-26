FROM php:8.2-fpm

RUN apt update \
    && apt install -y git zip libzip-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /var/www/application

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer