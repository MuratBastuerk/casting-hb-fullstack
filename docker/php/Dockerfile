FROM php:8.2-fpm-bookworm as php8

ARG NODE_VERSION=18
ARG POSTGRES_VERSION=15

RUN apt-get update \
    && apt-get install -y gnupg curl ca-certificates zip unzip git libcap2-bin libpng-dev dnsutils librsvg2-bin \
    && apt-get update \
        && apt-get install -y apt-utils \
        && apt-get install -y libpq-dev libzip-dev \
        && docker-php-ext-install -j$(nproc) zip \
        && docker-php-ext-install -j$(nproc) pgsql \
        && docker-php-ext-install -j$(nproc) pdo_pgsql \
    && curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer \
    && curl -sLS https://deb.nodesource.com/setup_$NODE_VERSION.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm \
    && apt-get update \
    && apt-get install -y yarn \
    && apt-get install -y postgresql-client-$POSTGRES_VERSION \
    && apt-get -y autoremove \
    && apt-get clean \
    && mkdir /var/www/.npm \
    && chown -R www-data:www-data /var/www/.npm

# Set default user and working directory
USER www-data
WORKDIR /app


#FROM node:$NODE_VERSION as nodeJs
#WORKDIR /home/node/app
#
#
#FROM php8 as phpNode
#COPY --from=nodeJs . /app


FROM php8 as xdebugPhp81

USER root
RUN pecl install xdebug && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=develop,debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.discover_client_host = true" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && apk del -f .build-deps \
    && rm -rf /tmp/* /usr/local/lib/php/doc/* /var/cache/apk/*

# Set default user and working directory
USER www-data
WORKDIR /app


FROM composer:2.3.9 AS composerPhp81
### its based on php-8.1.8
### if you need same dependencies like php8, add below ...
###RUN set -xe \
### #    && apk add --update icu \
