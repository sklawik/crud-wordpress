FROM wordpress:php7.4-apache

# kopiujemy tylko wp-content do właściwej lokalizacji
COPY ./src/ /var/www/html/

# nadajemy właściciela i uprawnienia tylko dla wp-content
RUN chown -R www-data:www-data /var/www/html/wp-content \
    && chmod -R 775 /var/www/html/wp-content

WORKDIR /var/www/html

EXPOSE 80