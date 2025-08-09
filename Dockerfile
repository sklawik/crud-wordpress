FROM wordpress:php7.4-apache

# kopiujemy tylko wp-content do właściwej lokalizacji
COPY ./src/wp-content /var/www/html/wp-content

# nadajemy właściciela i uprawnienia tylko dla wp-content
RUN chown -R www-data:www-data /var/www/html/wp-content \
    && chmod -R 775 /var/www/html/wp-content

WORKDIR /var/www/html

EXPOSE 80