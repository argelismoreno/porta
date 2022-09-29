<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Configuracion

- Clonar el repositorio
- Abrir el proyecto y correr ```composer install```
- Correr el comando ```npm install``` y ```npm run build```
- Configurar el ```.env``` con la base de datos y la configuracion de email
- Correr ```php artisan migrate``` para la ejecucion de la migracion
- Crear enlace simbolico ```php artisan storage:link``` para la visualizacion de la imagen
- En la actualidad se cuenta con un job que corre de manera diaria si se desea ejecutar para ver su funcionalidad ```php artisan send_email:user```

