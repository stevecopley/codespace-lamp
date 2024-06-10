FROM php:apache

# Add in PDO extensions
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql

# Install some useful software
RUN apt update
RUN apt -y install git vim

# Enable path rewriting
RUN a2enmod rewrite headers

# Copy Apache configs into place
ADD apache/site.conf  /etc/apache2/sites-available/000-default.conf
ADD apache/ports.conf /etc/apache2/ports.conf

# Restart the server after above changes
RUN service apache2 restart

