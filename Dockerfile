FROM 800387480392.dkr.ecr.eu-south-1.amazonaws.com/poc-base-laravel:latest

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-scripts --no-autoloader

COPY . .

RUN composer dump-autoload --optimize \
    && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
