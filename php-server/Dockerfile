FROM php:5.6-apache

MAINTAINER Pavel <rozehnal@gmail.com>

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY php.ini /usr/local/etc/php/

RUN apt-get update
#RUN apt-get install -y wget
#RUN echo 'deb http://packages.dotdeb.org jessie all' >> /etc/apt/sources.list
#RUN wget https://www.dotdeb.org/dotdeb.gpg
#RUN apt-key add dotdeb.gpg
#RUN apt-get update

#RUN docker-php-source extract \
    # do important things \
#    && docker-php-source delete

RUN apt-get install -y libmemcached-dev zlib1g-dev \
    && pecl install memcached-2.2.0 \
    && docker-php-ext-enable memcached

#RUN cd ~ \
#	&& git clone https://github.com/php-memcached-dev/php-memcached.git \
#	&& cd php-memcached \
#	&& git checkout php7 \
#	&& phpize \
#	&& ./configure --disable-memcached-sasl \
#	&& make \
#	&& make install

RUN docker-php-ext-install mysqli



#RUN apache2ctl restart
#RUN service memcached start

EXPOSE 80
EXPOSE 443