FROM php:apache

RUN docker-php-ext-install pdo_mysql



# FROM mcr.microsoft.com/devcontainers/base:noble

# RUN sudo apt-get update
# RUN sudo apt-get -y upgrade
# RUN sudo apt-get -y install apache2
# RUN sudo apt-get -y install mysql-server
# RUN sudo apt-get -y install php-common
# RUN sudo apt-get -y install php-mysql
# RUN sudo apt-get -y install php-cli

# RUN sudo a2enmod rewrite
# RUN sudo echo 'Listen 8080' >> /etc/apache2/ports.conf
# ADD apache.conf /etc/apache2/sites-available/000-default.conf

# ENV APACHE_DOCUMENT_ROOT www

# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# RUN sudo service apache2 restart
# RUN sudo service mysql restart

# EXPOSE 8080
