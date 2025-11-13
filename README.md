
# Courses

## Laracast 30 days to learn Laravel

[Laracast-link](https://laracasts.com/series/30-days-to-learn-laravel-11)

### Baby steps (7)

Target: completed by 2026-02-02

1. [Hello, Laravel](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/1)
2. [Your first route and view](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/2)
3. [Create a layout file using Laravel components](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/3)
4. [Make a pretty layout using TailwindCSS](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/4)
5. [Style the currently active navigation link](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/5)
6. [View data and route wildcards](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/6)
7. [Autoloading, Namespaces, and models](https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/7)

### Eloquent (8)
### Forms (4)
### Authentication (4)
### Digging Deeper (3)
### Final project (4)
Target: completed by 2026-02-28

## Learn Vue 3 step by step

Target: completed by 2026-07-15

[Laracast-link](https://laracasts.com/series/learn-vue-3-step-by-step)

## Laravel, Vue and SPAs

Target: completed by 2026-07-15

 [Laracast-link](https://laracasts.com/series/laravel-vue-and-spas)

 # Notes

## Docker
docker run --name <name> -d ubuntu:latest

docker compose up -d --build

docker exec <image-name> <command>
docker exec -it laravel-apache2-1 bash

docker ps -a

## Laravel setup

För att få igång Laravels egna default/projekt-starts view.

* docker compose up -d --build

### Filesystem perms

Tillsvidare ..

* chown -R www-data:www-data src/
* chmod 755 (rwxr-xr-x) -R src/storage/
* chmod 777 (rwxrwxrwx) -R src/storage/framework/views

### Artisan

1. docker exec laravel-php-fpm-1 php artisan make:session-table
2. docker exec laravel-php-fpm-1 php artisan migrate

