FROM php:7-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev
RUN docker-php-ext-install mbstring pdo_mysql mysqli tokenizer 
#COPY ./php.ini /usr/local/etc/php/
CMD ["php-fpm"]

