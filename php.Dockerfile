FROM php:8.0-fpm
RUN apt update
RUN apt install --yes zip libgd3 libgd-dev

ADD ./php.ini "$PHP_INI_DIR/php.ini"

# EXTENSIONS
RUN docker-php-ext-configure gd --with-freetype
RUN docker-php-ext-install gd pdo pdo_mysql 
RUN pecl install xdebug && docker-php-ext-enable xdebug

# COMPOSER 
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
