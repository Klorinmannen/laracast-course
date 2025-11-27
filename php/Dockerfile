FROM php:8.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN alias ll="ls -ltr" && alias lla="ls -ltra"

WORKDIR /var/www/src

EXPOSE 9000

CMD ["php-fpm"]
