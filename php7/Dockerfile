FROM php:7.2-apache

EXPOSE 80
EXPOSE 9003

# Habilitando o modo de reescrita do Apache
RUN a2enmod rewrite

RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Configure xDebug
RUN echo '[xdebug]\n\
zend_extension=xdebug\n\
xdebug.mode=off\n\
xdebug.start_with_request = yes\n\
xdebug.client_host = "host.docker.internal"\n\
xdebug.idekey="VSCODE"\n\
xdebug.log=/tmp/xdebug_remote.log\n\
' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
