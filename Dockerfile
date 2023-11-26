FROM php:5.6.20-fpm
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
