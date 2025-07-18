FROM php:8.5-apache

COPY . /var/www/html/

RUN docker-php-ext-install pdo_pgsql

EXPOSE 80
