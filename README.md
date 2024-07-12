# Proyecto ACU

Proyecto ACU - Administración de Contenido con Usuarios

## Table of Contents

- [Instalacion](#instalacion)
- [Ejecucion](#ejecucion)
- [Errores](#errores)

## Instalacion

Para instalar este proyecto localmente usando Docker, sigue estos pasos:

1. Instala las dependencias de Laravel. Ve a la carpeta del proyecto (`src folder`) y ejecuta:

    ```bash
    composer install -vvv
    ```

2. Configura Laravel definiendo el archivo `.env` y genera una clave para la aplicación. Para esto puedes copiar el archivo de configuración de ejemplo `.env.example`:

     ```bash
     cp .env.example .env
     ```

3. Genera una nueva clave para la aplicación:

     ```bash
     php artisan key:generate
     ```

   - Completa el archivo `.env` con los detalles de tu entorno, como la configuración de la base de datos y otras variables específicas del proyecto.


## Ejecucion

Luego de instalar las dependecias cd hacia la carpeta raíz y puede iniciar el contenedor de docker con el comando:

  ```bash
  docker compose build
  docker compose up -d
  ```

Esta aplicación será accesible a través de  `http://localhost:80`.

## Errores

Bajo algunas circunstacias laravel reporta no tener permisos para usar la carpeta storage a fin de usar logs. Esto puede ser resuelto ejectundo estos comandos dentro del contenedor.

  ```bash
  RUN chmod -R ugo+rw /var/www/app/storage
  RUN chmod -R 775 /var/www/app/storage
  ```
> [!WARNING]
> En caso de que los puertos aparezcan ocupados luego de reiniciar algunos servicios.  Estos comandos pueden ejectarse en el pc anfitrión:
  ```bash
  net stop winnat
  netsh int ipv4 set dynamic tcp start=49152 num=16384
  netsh int ipv6 set dynamic tcp start=49152 num=16384
  net start winnat
  ```