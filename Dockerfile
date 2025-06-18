# Use official PHP with Apache image
FROM php:8.2-apache

# Enable mod_rewrite for Apache (useful for routing later)
RUN a2enmod rewrite

# Copy all project files into the container's Apache directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html
