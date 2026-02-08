# Dockerfile para Portfolio - PHP 8.2
FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo_pgsql pgsql mbstring exif pcntl bcmath gd opcache

# Configurar opcache para producción
RUN echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.memory_consumption=256" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.max_accelerated_files=20000" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.validate_timestamps=0" >> /usr/local/etc/php/conf.d/opcache.ini

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar archivos del proyecto
WORKDIR /app
COPY . .

# Instalar dependencias PHP
RUN composer install --optimize-autoloader --no-interaction --no-scripts --no-dev

# Crear directorios de logs y cache
RUN mkdir -p storage/logs storage/framework/cache storage/framework/views \
    && chmod -R 775 storage bootstrap/cache

# Generar clave de aplicación si no existe
RUN if [ ! -f .env ]; then cp .env.example .env && php artisan key:generate; fi

# Exponer puerto
EXPOSE 8000

# Comando de inicio
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]

