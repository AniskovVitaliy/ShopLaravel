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

#xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Копирует файлы и папки из текущей директории, где находится пользователь в указанную директорию в контейнере
# COPY считывает позицию пользователя на хосте, поэтому первым аргументом идет «.»
COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini
COPY ./_docker/app/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Задает переменные среды внутри образа, на которые могут ссылаться другие инструкции.
# ENV часто применяется для передачи информации в контейнеризированное приложение через переменные среды.
# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

# 'WORKDIR' позволяет изменить рабочую директорию образа.
# Последующие инструкции CMD, RUN, ENTRYPOINT наследуют привязку к директории установленной WORKDIR.
WORKDIR /var/www
