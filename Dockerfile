FROM wordpress:php7.4-apache

COPY ./src /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html

WORKDIR /var/www/html

EXPOSE 80