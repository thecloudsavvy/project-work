FROM php:7.4-apache
# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Install the MySQLi extension for PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the PHP application files to the Apache web directory
COPY . /var/www/html/

RUN apt-get -y upgrade
RUN apt-get -y update
RUN apt-get -y install vim

EXPOSE 80

# # Stage 1: Build PHP with Apache and necessary extensions
# FROM php:7.4-apache AS builder

# # Enable mod_rewrite for Apache
# RUN a2enmod rewrite

# # Install the MySQLi extension for PHP
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# # Copy the PHP application files to the Apache web directory
# COPY . /var/www/html/

# # Stage 2: Optimize and create the final Apache-PHP image
# FROM php:7.4-apache

# # Copy necessary configurations and files from the builder stage
# COPY --from=builder /etc/apache2 /etc/apache2
# COPY --from=builder /usr/local/etc/php /usr/local/etc/php
# COPY --from=builder /var/www/html /var/www/html
# COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions

# # Expose the necessary port
# EXPOSE 80

# # Start Apache in the foreground
# CMD ["apache2-foreground"]
