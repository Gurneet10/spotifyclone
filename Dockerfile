# Use the official PHP image as the base image
FROM php:latest

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your PHP application files to the container
COPY . /var/www/html

# Expose port 80 (adjust if your application uses a different port)
EXPOSE 80

# Start PHP's built-in web server
CMD ["php", "-S", "localhost:80"]
