FROM php:7.4-fpm-buster

RUN apt-get update && apt-get install -y wget \
    && pecl install redis \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-enable redis \
    && wget https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer -O - -q | php -- --quiet --install-dir=/usr/local/bin --filename=composer

