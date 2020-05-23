FROM php:7.2-fpm

RUN apt-get update && \
  apt-get install -y zlib1g-dev libpq-dev libxml2-dev git unzip libgmp-dev re2c libmhash-dev libmcrypt-dev file \
    libc-client-dev libkrb5-dev libfreetype6-dev libjpeg62-turbo-dev locales vim nano openssl librdkafka-dev supervisor && \

    pecl install rdkafka && \

    docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-configure bcmath --enable-bcmath \
    && docker-php-ext-configure intl --enable-intl \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-configure pdo_pgsql --with-pdo-pgsql \
    && docker-php-ext-configure mbstring --enable-mbstring \
    && docker-php-ext-install -j$(nproc) \
        gd \
        bcmath \
        intl \
        pcntl \
        pdo_pgsql \
        mbstring \
        iconv \
        zip && \
    docker-php-ext-enable rdkafka && \

    # Composer
    curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
    mkdir -m 777 -p /var/composer/ && \

    chmod -R 777 /var && \

    localedef -c -i ru_RU -f UTF-8 ru_RU.UTF-8 \
    && localedef -c -i ru_RU -f CP1251 ru_RU.CP1251 && \

    echo "short_open_tag = Off" >> /usr/local/etc/php/conf.d/no_tags.ini && \

    mkfifo -m 666 /tmp/stderr && \

    usermod -u 1000 www-data \
      && groupmod -g 1000 www-data

ENV COMPOSER_HOME /var/composer/ && \
    LANG ru_RU.UTF-8 && \
    LANGUAGE ru_RU:ru && \
    LC_ALL ru_RU.UTF-8

ADD php.ini /usr/local/etc/php/conf.d/custom.ini

RUN chown 1000:1000 /var/run

WORKDIR /var/www

USER 1000

EXPOSE 9000

CMD ["php-fpm"]
