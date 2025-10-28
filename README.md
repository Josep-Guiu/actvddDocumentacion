<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Documentació i control de versions

Ejercicio de despliegue de apps web.

## Archivos Principales
- `Producto.php`: Archivo que contiene la clase producto propuesta por el enunciado
- `launch.json`: Archivo para inicializar nuestro proyecto en navegador.

- `archivo.js`: Explicación corta de su funcionalidad.
- `otroArchivo.js`: Explicación corta.

## Cómo usarlo

F5.

### Cómo hacer la instalación de phpdocumentor

1️⃣ Descarga el PHAR de phpDocumentor

Invoke-WebRequest -Uri https://phpdoc.org/phpDocumentor.phar -OutFile phpDocumentor.phar
Esto descargará el archivo phpDocumentor.phar en tu carpeta actual.

2️⃣ Ejecutar el PHAR en Windows

php phpDocumentor.phar -d app -t docs

-d app → carpeta donde están tus clases (Producto.php, Carrito.php, Usuario.php)
-t docs → carpeta donde se generará la documentación HTML

3️⃣ Abrir la documentación

Abre la carpeta docs que se creó en tu proyecto
Haz doble clic en index.html para ver la documentación en tu navegador