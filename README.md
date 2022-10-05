# backend-descuentos
--Para la poder ejecutar el proyecto:
git clone https://github.com/kw3a/backend-descuentos.git
cd backend-descuentos
composer install
cp .env.example .env
php artisan cache:clear
composer dump-autoload
php artisan key:generate

--Para ejecutar el proyecto:
php artisan serve
//entrar a http://localhost:8000/