## Setup proyecto

### En la base del proyecto correr:
#### Comandos para Linux, para Windows buscar la equivalencia
- **cp .env.example .env**
- **docker-compose up**
- **chown $USER:www-data -R storage**
- **chmod 775 -R storage**



### Acceder al contenedor web docker-php y correr:

- **composer install**
- **php artisan migrate**
