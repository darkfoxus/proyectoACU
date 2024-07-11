FROM php:8.2.11-fpm
    ARG user
    ARG uid

    # Install Composer
    RUN echo "Install COMPOSER"
    RUN cd /tmp \
        && curl -sS https://getcomposer.org/installer -o composer-setup.php \
        && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
        && rm composer-setup.php


    # Install required PHP extensions
    RUN docker-php-ext-install pdo pdo_mysql


    # Update package manager and install useful tools
    RUN apt-get update && apt-get -y install apt-utils nano wget dialog vim


    # Install important libraries
    RUN echo "Install important libraries"
    RUN apt-get -y install --fix-missing \
        apt-utils \
        build-essential \
        git \
        curl \
        libcurl4 \
        libcurl4-openssl-dev \
        zlib1g-dev \
        libzip-dev \
        zip \
        libbz2-dev \
        locales \
        libmcrypt-dev \
        libicu-dev \
        libonig-dev \
        libxml2-dev
    
    
    # Install Postgres PDO (adjust for Windows if needed)
    RUN apt-get install -y libpq-dev \
        && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
        && docker-php-ext-install pdo pdo_pgsql pgsql
    
    
    # Clean up
    RUN apt-get clean && rm -rf /var/lib/apt/lists/*
    
    
    # Add any additional configurations or adjustments as needed
    
    
    # Set the working directory
    WORKDIR /var/www/app
    
    # setup permisions 
    RUN mkdir /var/www/app/storage
    RUN chown -R $user:$user /var/www/app/storage
    RUN chmod -R 775 /var/www/app/storage
    RUN chmod -R ugo+rw /var/www/app/storage
    #RUN chown -R www-data /var/www
    #COPY o /usr/local/go
    #RUN chown -R $USER:www-data /var/www/storage
    #RUN chown -R $USER:www-data /var/www/bootstrap/cache
    #RUN mkdir /volume_data
    #RUN addgroup -g 1000 -S www && \ adduser -u 1000 -S www -G www
    
    #COPY --chown=www-data:www-data . /var/www
    USER $user
        
    # Expose the port
    EXPOSE 9001
    
    
    # Define the entry point
    CMD ["php-fpm"]
    
    # toca tirar luego este comando en el container luego del compose up
    # RUN chmod -R ugo+rw /var/www/app/storage