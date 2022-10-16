# backend-descuentos
--Para la poder instalar el proyecto (la primera vez)
-tener instalado composer
-tener instalado mysql, y sin contraseña
-tener mysql encendido
+git clone https://github.com/kw3a/backend-descuentos.git
+cd backend-descuentos
+git switch integracion (o main, dependiendo el caso)
+composer install
+cp .env.example .env -> para linux
+copiar y pegar .env.example en el mismo directorio, y renombrar la copia como .env -> para windows
+en .env, cambiar:
  DB_DATABASE=descuentos
  DB_USERNAME=root
  DB_PASSWORD=
+php artisan cache:clear
+composer dump-autoload
+php artisan key:generate

--Para ejecutar el proyecto:
php artisan migrate:fresh --seed -> para crear y llenar la base de datos 
php artisan serve
//entrar a http://localhost:8000/