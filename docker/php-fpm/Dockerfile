FROM php:7.0-fpm

WORKDIR /var/www

# install the PHP extensions we need
RUN apt-get update && apt-get install -y dos2unix && apt-get install -y zlib1g-dev libicu-dev curl nano wget git libpng-dev g++ libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip bcmath

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libcurl4-openssl-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install sockets \
    && docker-php-ext-install curl \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    bcmath \
    mbstring \
    mcrypt \
    simplexml \
    soap \
    dba \
    dom \
    zip


# install the composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# install phpunit
RUN wget https://phar.phpunit.de/phpunit-5.7.13.phar && chmod +x phpunit-5.7.13.phar && mv phpunit-5.7.13.phar /usr/local/bin/phpunit

# enable php error logs
RUN echo "php_admin_flag[log_errors] = on" >> /usr/local/etc/php-fpm.d/www.conf

# enable environment variable forwarding for fpm workers
RUN echo "clear_env = no" >> /usr/local/etc/php-fpm.d/www.conf

# setting up TERM variable
RUN echo "export TERM=xterm" >> /etc/bash.bashrc


# Install Node.js
RUN apt-get install -my wget gnupg
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash - && \
  apt-get install -y nodejs

RUN npm install -g bower && npm install -g gulp

# copy custom PHP config file
COPY /custom.ini /usr/local/etc/php/conf.d/

CMD ["php-fpm"]