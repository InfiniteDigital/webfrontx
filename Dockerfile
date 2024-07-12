FROM webdevops/php-nginx:8.2-alpine
ENV TZ="Asia/Bangkok"
WORKDIR /app/

COPY webfront/php.ini /opt/docker/etc/php/php.ini
COPY webfront/vhost.conf /opt/docker/etc/nginx/vhost.conf
COPY --chown=nobody:nogroup webfront/ /app