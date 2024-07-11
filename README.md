# proyectoACU steps to install
cd into src folder and type
 - composer install -vvv
 - cp .env.example .env
 - php artisan key:generate

cd into the root of the project and run
 - docker compose build
 - docker compose up -d
  
Luego correr este comando en el container en caso de que los log de laravel reporten error
 - RUN chmod -R ugo+rw /var/www/app/storage
 - RUN chmod -R 775 /var/www/app/storage