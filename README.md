Dependencias:

- Composer
- PHP 8.0.13
- Node 16.15.0
- Mysql 5.7

- git clone repo
- composer install
- npm install
- configure las variables en el .env (entre ellas servicio de email como Mailtrap para envío de confirmación de email) y cree su base de datos
- php artisan migrate
- npm run dev en una instancia de consola
- php artisan serve en otra