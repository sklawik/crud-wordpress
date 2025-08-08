FROM php:7.4-apache
RUN docker-php-ext-install mysqli


COPY ./src/ /var/www/html/
RUN chmod -R 777 /var/www/html/

WORKDIR /var/www/html

EXPOSE 80