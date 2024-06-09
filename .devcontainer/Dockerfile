FROM php:apache

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql

RUN apt update
RUN apt -y install git vim

RUN a2enmod rewrite
RUN service apache2 restart

EXPOSE 8080
