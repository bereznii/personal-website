FROM nginx:stable-alpine

ADD docker/conf/vhost.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/personal-website

RUN adduser -D -H -u 1000 -s /bin/bash www-data -G www-data
RUN chown -R www-data:www-data ../personal-website


