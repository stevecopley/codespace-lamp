FROM php:8.3-apache

# Install php  extensions
RUN apt-get update
RUN docker-php-ext-install mysqli pdo pdo_mysql
#RUN docker-php-ext-install zip
#RUN docker-php-ext-install intl
#COPY php.ini /usr/local/etc/php/conf.d/custom-php.ini

# copy the apache config and enable the site
ADD apache/apache.conf /etc/apache2/sites-available/000-default.conf

# enable apache rewrite module
RUN a2enmod rewrite setenvif headers

EXPOSE 8080

