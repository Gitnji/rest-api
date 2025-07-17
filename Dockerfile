FROM php:8.2-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

RUN chmod -R 755 /var/www/html/

RUN a2enmod rewrite

RUN docker-php-ext-install pdo_pgsql

EXPOSE 80
