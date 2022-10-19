
# backend-descuentos
--Para poder instalar el proyecto (la primera vez)
-tener instalado composer
-tener instalado mysql, y sin contraseña
-tener instalado php
-tener mysql encendido

--Para correr el proyecto por primera vez
+crear una base de datos en mysql llamada "descuentos"
//Desde la terminal 
+git clone https://github.com/kw3a/backend-descuentos.git
+cd backend-descuentos
+composer install
+cp .env.example .env -> para linux  (Solo debe hacerse en caso de no tener el archivo .env)
+copiar y pegar .env.example en el mismo directorio, y renombrar la copia como .env -> para windows  (Solo debe hacerse en caso de no tener el archivo .env)
+en .env, cambiar:
  DB_DATABASE=descuentos
  DB_USERNAME=root
  DB_PASSWORD=
+php artisan cache:clear
+composer dump-autoload
+php artisan key:generate

--Para ejecutar el proyecto:
php artisan migrate:fresh --seed -> para crear y llenar la base de datos 
php artisan serve -> para encender el servidor
//entrar a http://localhost:8000/ y verificar que la página de laravel se muestre

#frontend descuentos
--Para poder correr el proyecto
-Tener instalado visual studio con la extensión live server
-Prender el live server e ir a la dirección que te manda
-Tener el backend encendido



Todas las imágenes subidas se guardan en la carpeta backend-descuentos/storage/app/images/