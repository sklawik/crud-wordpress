FROM wordpress:php7.4-apache

COPY ./src /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html


RUN bash -c ' \
  if [ ! -f /var/www/html/wp-config.php ]; then \
    cp /var/www/html/wp-config-sample.php /var/www/html/wp-config.php; \
    sed -i "s/database_name_here/my_database/" /var/www/html/wp-config.php; \
    sed -i "s/username_here/root/" /var/www/html/wp-config.php; \
    sed -i "s/password_here/tiger/" /var/www/html/wp-config.php; \
    sed -i "s/localhost/db/" /var/www/html/wp-config.php; \
  fi'