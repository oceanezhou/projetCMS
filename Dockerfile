FROM php:8.1.0

RUN docker-php-ext-install mysqli pdo pdo_mysql json \
&& a2enmod rewrite