FROM php:8.3-apache
RUN docker-php-ext-install mysqli
# Mengarahkan Apache ke folder public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri \
    -e 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/*.conf
