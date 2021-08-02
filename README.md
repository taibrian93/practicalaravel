Pasos:
1. Clonar repositorio:
    git clone https://github.com/taibrian93/practicalaravel.git
2. Correr el siguiente comando:
    composer install
3. Copiar .env.example:
    cp .env.example .env
4. Correr el siguiente comando:
    php artisan key:generate
5. Crear base de datos: 
    practicalaravel
6. Modificar .env:
    DB_DATABASE=practicalaravel
7. Correr el siguiente comando:
    php artisan migrate
8. Correr el siguiente comando:
    php artisan db:seed
9. Correr el siguiente comando:
    php artisan serve
10. Ingresar con el siguiente usuario
    user: admin@bibliotecaperu.com
    pass: 123456789
