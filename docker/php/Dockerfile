ARG version

FROM php:${version}

RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev g++

RUN docker-php-ext-install mysqli pdo pdo_mysql intl
