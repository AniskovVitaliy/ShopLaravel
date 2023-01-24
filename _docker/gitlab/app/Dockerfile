# Dockerfile всегда должен начинаться с импорта базового образа.
# Для этого используется ключевое слово 'FROM'.
FROM php:8.0-fpm

# Выполняет команду внутри контейнера и сохраняет результат.
# RUN может исполнять конвейер команд с логическими операторами && и ||.
# Каждый новый RUN создает новый слой что замедляет работу скрипта, пожтому чем меньше ранов тем лучше
RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pdo_mysql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Копирует файлы и папки из текущей директории, где находится пользователь в указанную директорию в контейнере
# COPY считывает позицию пользователя на хосте, поэтому первым аргументом идет «.»
COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini


COPY app            /var/www/app
COPY bootstrap      /var/www/bootstrap
COPY config         /var/www/config
COPY database       /var/www/database
COPY public         /var/www/public
COPY resources      /var/www/resources
COPY routes         /var/www/routes
COPY storage        /var/www/storage
COPY artisan        /var/www/artisan
COPY package.json   /var/www/package.json
COPY webpack.mix.js /var/www/webpack.mix.js

COPY composer.*  ./

# Задает переменные среды внутри образа, на которые могут ссылаться другие инструкции.
# ENV часто применяется для передачи информации в контейнеризированное приложение через переменные среды.
# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin
# alias
RUN echo "alias a='artisan'" >> /root/.bashrc

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

RUN composer install \
      --no-interaction \
      --no-plugins \
      --no-suggest \
      --no-scripts \
      --no-autoloader \
      --prefer-dist


RUN composer dump-autoload  --no-scripts --optimize && \
    chown -R root:www-data /var/www && \
    chmod 755 -R /var/www && \
    chmod -R 775 /var/www/storage && \
    chmod -R 775 /var/www/bootstrap/cache

# 'WORKDIR' позволяет изменить рабочую директорию образа.
# Последующие инструкции CMD, RUN, ENTRYPOINT наследуют привязку к директории установленной WORKDIR.
WORKDIR /var/www
