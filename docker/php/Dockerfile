# ビルド元のDockerイメージに、php:7.4-fpmを指定
FROM php:7.4-fpm
# php.iniをコンテナにコピーしたい場合はここに記述
COPY php.ini /usr/local/etc/php/

RUN docker-php-ext-install pdo_mysql