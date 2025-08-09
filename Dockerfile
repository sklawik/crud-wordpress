FROM wordpress:php7.4-apache

# COPY ./src/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 777 /var/www/html
WORKDIR /var/www/html

EXPOSE 80