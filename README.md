# backend-descuentos
git clone https://github.com/kw3a/backend-descuentos.git
cd backend-descuentos
composer install
cp .env.example .env
php artisan cache:clear
composer dump-autoload
php artisan key:generate