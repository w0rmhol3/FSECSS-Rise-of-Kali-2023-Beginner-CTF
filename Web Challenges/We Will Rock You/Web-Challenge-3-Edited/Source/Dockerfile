# Use an official PHP runtime as a parent image with Apache
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP files into the container at /var/www/html
COPY . /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache server in the foreground
CMD ["apache2-foreground"]
