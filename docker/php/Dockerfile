FROM php:8.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN chown -R www-data:www-data /var/www/src && chmod -R 755 /var/www/src/storage

WORKDIR /var/www/src

EXPOSE 9000

CMD ["php-fpm"]
