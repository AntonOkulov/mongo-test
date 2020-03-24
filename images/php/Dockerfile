FROM php:7.1-fpm

ENV RABBITMQ_VERSION v0.8.0

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        cmake \
        libssl-dev \
        autoconf \
        pkg-config \
    && docker-php-ext-install -j$(nproc) iconv mcrypt mbstring mysqli pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install bcmath \
    && pecl install redis mongodb-1.7.4 \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis \
    && echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini \
    && usermod -u 1000 www-data

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www/app

CMD ["php-fpm"]