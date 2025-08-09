FROM wordpress:php7.4-apache

COPY ./src/wp-content /var/www/html/wp-content

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html

WORKDIR /var/www/html/wp-content

EXPOSE 80