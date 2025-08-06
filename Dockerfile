FROM php:7.4-apache
RUN CHMOD -R 777 ./src/
COPY ./src/ /var/www/html/
RUN CHMOD -R 777 /var/www/html/
RUN docker-php-ext-install mysqli
EXPOSE 80
