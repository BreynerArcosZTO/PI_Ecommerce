# Base de datos ecommerce productos estetica
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database/database.sqlite
DB_FOREIGN_KEYS=true
DB_USERNAME=root
DB_PASSWORD=

## Para correr el servidor local

php artisan serve

## Llave generica para que funcione bien

php artisan key:generate

## Comando para migrar bases

php artisan migrate