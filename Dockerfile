FROM composer

EXPOSE 80

ADD ./ /app

RUN composer install \
    --ignore-platform-reqs \
    --prefer-dist \
    --no-progress \
    --optimize-autoloader; \
    \
    rm composer.lock
