Pasos:
1. Clonar repositorio:
    git clone https://github.com/taibrian93/practicalaravel.git
2. Correr el siguiente comando:
    composer install
3. Correr el siguiente comando:
    php artisan key:generate
4. Crear base de datos: 
    practicalaravel
5. Copiar .env.example:
    cp .env.example .env
6. Modificar .env:
    DB_DATABASE=practicalaravel
7. Correr el siguiente comando:
    php artisan migrate
8. Correr el siguiente comando:
    php artisan serve
