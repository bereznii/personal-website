FROM nginx

ADD docker/conf/vhost.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/personal-website

CMD php /var/www/personal-website/artisan migrate

CMD php /var/www/personal-website/artisan command:updateprojects

