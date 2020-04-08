FROM nginx:alpine
MAINTAINER Hungnv
#install php
RUN apk update --no-cache
RUN apk add \
    php7 \
    php7-fpm \
#    util-linux \
    supervisor \
    php7-session \
    php7-mbstring \
    php7-xml \
    php7-json \
    php7-curl \
    php7-openssl \
    php7-dom \
    php7-xmlwriter \
    php7-tokenizer \
    git \
    composer

COPY ./supervisord.conf /etc/supervisord/supervisord.conf


# change nginx config
COPY ./default.conf /etc/nginx/conf.d/default.conf


RUN mkdir -p /var/www/html/public

WORKDIR /var/www/html

# add source to working directory
ADD ./index.php ./public

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord/supervisord.conf"]
