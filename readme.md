# web-comidas-cucei
Web para poder vender y comprar alimentos dentro de cucei, ademas de recomendar buenos lugares fuera del plantel.

## Estructura:
- Sesión
  - Usuario registrado
  - Usuario invitado
- Página principal
  - Recomendaciones
    - Fotos
    - Descrición
    - Comentarios
- Comentarios recientes
- Barra de búsqueda

##Cambios planeados:
[ ] Adaptar las vistas principal, post y de comentario.
[ ] Agregar la posibilidad de crear post.
    [ ] Crear modelo para los post.
    [ ] Crear migración de los post.
    [ ] Enrolar la migración.
    [ ] Rellenar el modelo con datos generados por un seeder.
[ ] Agregar la posibilidad de crear comentarios en los posts.
    [ ] Crear el modelo para los comentarios.
    [ ] Crear la migracion para los comentarios.
[ ] Agregar la opcion de filtrar post en la página principal.
    [ ] Configurar la estructura del post
[ ] Agregar la opción de iniciar sesión.
    [ ] 
[ ] Agregar la opción de registrarse.
    [ ] Agregar la opción de iniciar sesion como invitado con cuenta de facebook.
    [ ] Agregar el despliegue de comentarios realizados recientemente en la página principal.

## Dependencias y librerias usadas:

* Faker PHP library

##Lista de commits

###Commit num xxxx:
- Cambios hechos al archivo .env:
	* Se cambio el nombre por defecto del proyecto laravel a comidas-cucei.
	* Se cambio el usuario, nombre y contraseña de la base de datos por:
	`
		DB_DATABASE=homestead	DB_DATABASE=comidas-cucei
		DB_USERNAME=homestead	DB_USERNAME=root
		DB_PASSWORD=secret		DB_PASSWORD=
	`
- Se modifió el formato al archivo **README.md**.
- Se añadio una lista de cambios planeados.
- Se creó la base de datos en mySQL a través de phpMyAdmin:
![base-datos](http://i635.photobucket.com/albums/uu76/wellington360/i5909-17-11-capA-creacion-base-datos.png)
- Se especificó la estructura del proyecto.
- Se especificaron los requisitos del proyecto.
- Se especificaron las dependencias del proyecto.

## Páginas de referencia

[Markdown cheatsheet online](https://guides.github.com/pdfs/markdown-cheatsheet-online.pdf)
[Initial database creation and seeding with Laravel 5 (Build a forum part 1)](https://medium.com/employbl/build-an-online-forum-with-laravel-initial-setup-and-seeding-part-1-a53138d1fffc)
[Use the Repository Design pattern in a Laravel application](https://medium.com/employbl/use-the-repository-design-pattern-in-a-laravel-application-13f0b46a3dce)

## Requisitos a cumplir

Se espera un sistema web utilizando Laravel como framework de desarrollo.

### Base de datos

[ ] Uso de migraciones para crear y modificar tablas.
[ ] Implementar al menos un Seeder.
[ ] Agregar datos de prueba en al menos una tabla mediante Factory.

### Autenticación, autorización y seguridad

[ ] Realizar autenticación de usuarios mediante correo y contraseña.
[ ] Validar toda información que se reciba a partir de una formulario.
[ ] Implementar al menos dos middlewares: auth() y uno personalizado.
[ ] Implementar al menos en una ocasión Gates y Policies **Solo si se ve en clase**
[ ] **Extra:** Passport / Socialite

### GUI

[ ] Crear vistas utilizando blade
[ ] Crear al menos un layout e implementarlo en vistas
    [ ] Mostrar nombre, nombre de usuario o correo del usuario.
    [ ] Mostrar opción para ingresar (login) o salir (logout) del sistema según corresponda.
    [ ] Mostrar menú de navegación.
[ ] Implementar Bootstrap
[ ] **Importante:** Mostrar mensajes al usuario cuando:
    [ ] Exista un error de validación al completar un formulario.
    [ ] Se haya completado una tarea, sea con éxito, con errores o si require información adicional. (Ej. Al crear, eliminar o editar).
    [  Existan listados vacíos.
[ ] Cuando exista un error al validar un formulario o se esté editando información de un recurso existente, el formulario deberá mostrar la información capturada o a editar.
[ ] Los enlaces o inclusión de recursos locales (css, js, etc) deberán generarse utilizando los helpers adecuados. (Ej. action, route, asset).
[ ] Utilizar paginación en un listado.

### Eloquent (Modelos, consultas)

[ ] Tener al menos una relación de cada uno de los siguientes tipos y sus inversas:
    [ ] "uno a muchos" (1:n)
    [ ] "muchos a muchos" (n:n)
    [ ] polimórfica o polimórfica muchos a muchos.
[ ] Utilizar "Eager Loading" al consultar múltiples registros con n relaciones.
[ ] Utilizar al menos en una consulta "Constraining Eager Load".
[ ] Declarar "fillable".
[ ] Almacenar información adicional en al menos una tabla pivote.
[ ] Implementar "time stamps" en al menos un modelo.
[ ] Implementar "Soft Delete" en al menos un modelo.
[ ] Crear al menos un "accessor" y un "muttator" en al menos un modelo.
[ ] Agregar al menos un método tipo Scope en un modelo.

### Controladores

[ ] Crear al menos un controlador tipo resource.
[ ] **Extra:** Crear un controlador tipo resource anidado.
[ ] Crear al menos un controlador con al menos un método personalizado.

### API

[ ] Crear y consultar al menos un controlador con al menos un método que regrese un json.

### Archivos

Se deberá crear e implementar un cargador de archivos que permita:

[ ] Cargar un archivo.
[ ] Listar los archivos cargados.
[ ] Eliminar un archivo.
[ ] Cargar múltiples archivos.

### Envío de correo electrónico

[ ] Enviar al menos una notificación vía correo electrónico.
