# Используем официальный PHP образ с поддержкой FPM
FROM php:8.3-fpm

# Устанавливаем необходимые расширения для Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем исходный код проекта в контейнер
WORKDIR /var/www
COPY . .

# Устанавливаем зависимости Laravel
RUN composer install

# Устанавливаем права на папки для правильной работы Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Открываем порт 9000 для подключения к приложению
EXPOSE 9000

# Запускаем PHP-FPM сервер
CMD ["php-fpm"]
