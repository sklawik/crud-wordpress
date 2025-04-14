FROM php:7.4-apache
RUN chmod -R 777 ./src/
COPY ./src/ /var/www/html/
RUN docker-php-ext-install mysqli
EXPOSE 80
