FROM php:8.1.1-apache

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update && apt-get install -y \
    git \
    zip \
    curl \
    sudo \
    unzip \
    libzip-dev \
    libicu-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    libfreetype6-dev \
    g++

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY .env.example .env

RUN a2enmod rewrite
RUN /etc/init.d/apache2 restart