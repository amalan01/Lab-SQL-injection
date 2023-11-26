FROM php:7.4-apache
# Install your extensions
# To connect to MySQL, add mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql
# Run docker-php-ext-enable command to activate mysqli
RUN docker-php-ext-enable mysqli
