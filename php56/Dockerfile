FROM php:5.6-apache

EXPOSE 80
EXPOSE 9000

# Habilitando o modo de reescrita do Apache
RUN a2enmod rewrite

RUN pecl install xdebug-2.5.3 \
    && docker-php-ext-enable xdebug

# Configure xDebug
RUN echo "\
xdebug.remote_enable=1\n\
xdebug.remote_handler=dbgp\n\
xdebug.remote_port=9000\n\
xdebug.remote_autostart=1\n\
xdebug.remote_log=/tmp/xdebug.lo\n\
xdebug.remote_connect_back=0\n\
xdebug.remote_host=docker.for.mac.localhost\n\
xdebug.max_nesting_level=1500\
">> /usr/local/etc/php/conf.d/xdebug.ini

      