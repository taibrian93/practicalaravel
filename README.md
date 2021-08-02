Pasos:
1. Clonar repositorio:
    <br>
    git clone https://github.com/taibrian93/practicalaravel.git
2. Correr el siguiente comando:
    <br>
    composer install
3. Copiar .env.example:
    <br>
    cp .env.example .env
4. Correr el siguiente comando:
    <br>
    php artisan key:generate
5. Crear base de datos: 
    <br>
    practicalaravel
6. Modificar .env:
    <br>
    DB_DATABASE=practicalaravel
7. Correr el siguiente comando:
    <br>
    php artisan migrate
8. Correr el siguiente comando:
    <br>
    php artisan db:seed
9. Correr el siguiente comando:
    <br>
    php artisan serve
10. Ingresar con el siguiente usuario:
    <br>
    user: admin@bibliotecaperu.com
    pass: 123456789
