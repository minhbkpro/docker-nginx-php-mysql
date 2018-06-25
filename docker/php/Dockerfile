ARG version

FROM php:${version}

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo pdo_mysql
