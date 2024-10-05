# Use the official PHP image as the base image
FROM php:8.1-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Install any needed packages specified in a requirements file
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]