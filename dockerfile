FROM php:8.1-apache

# Habilitar la extensión MySQLi
RUN docker-php-ext-install mysqli

# Reiniciar el servidor Apache
RUN service apache2 restart

# Copiar tus archivos de la aplicación
COPY ./app /var/www/html

# Expone el puerto 80
EXPOSE 80
