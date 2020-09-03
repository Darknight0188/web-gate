FROM php:7.4-fpm

# Extension mysql driver for mysql
# RUN echo "upstream php-upstream { server ${PHP_UPSTREAM_CONTAINER}:${PHP_UPSTREAM_PORT}; }" > /etc/nginx/conf.d/upstream.conf \
# && rm /etc/nginx/conf.d/default.conf

RUN docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get update && apt-get install nodejs npm -y

RUN npm install yarn -g

COPY --from=composer /usr/bin/composer /usr/bin/composer
