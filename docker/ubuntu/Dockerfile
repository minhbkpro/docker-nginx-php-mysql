ARG version

FROM ubuntu:${version}

WORKDIR /usr/src/www

RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    apt-utils \
    zlib1g-dev \
    libicu-dev \
    g++ \
    git \
    php \
    php-intl \
    php-mbstring \
    php-simplexml \
    php-zip \
    php-curl \
    composer \
    curl

# install codeception
RUN curl -LsS https://codeception.com/codecept.phar -o /usr/local/bin/codecept
RUN chmod a+x /usr/local/bin/codecept
