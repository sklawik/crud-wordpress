FROM wordpress:php7.4-apache

# kopiujemy cały kod źródłowy WordPressa
COPY ./src /var/www/html/

# nadajemy właściciela i uprawnienia dla całego katalogu WP
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html

WORKDIR /var/www/html

EXPOSE 80