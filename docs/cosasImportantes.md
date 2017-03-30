## Estructura de proyectos Laravel
Los proyectos Laravel, siguen una estructura Modelo - Vista - Controlador. Esto hace que el flujo de la página web que use Laravel, sea de la siguiente forma:
1.	El usuario, que es el que maneja el navegador web, entra a una página web.
2.	La página web, pide el contenido al servidor web, que es donde está el proyecto Laravel.
3.	A lo primero que se entra en el servidor, es al Archivo de ruteo, el cual llamara al Controlador.
4.	El Controlador, ejecuta una función, que puede o no, ir a buscar algo al Modelo, y luego de esto, va a la Vista asociada a la función del Controlador.
5.	La Vista es devuelta como respuesta del servidor, y es mostrada al usuario.

## Modelos
Los modelos, nos van a servir para obtener los datos de la base de datos, de la misma forma en que se utiliza el código php, sin necesidad de tener que hacer conexiones a la base de datos, ni tener que hacer consultas SQL en el código. Estos archivos van en la carpeta app/.

## Controladores
Los controladores se encargan de ejecutar procesamientos solicitados por el usuario que usa el navegador, yendo a buscar cosas al modelo si es necesario, y finalmente, le devuelve la vista al navegador. Estos archivos van en la carpeta app/Http/Controllers/.

## Vistas
Las vistas, son los HTML que ve el usuario en el navegador, que es provista por el controlador, y puede o no mostrar cosas de la base de datos. Estos archivos van en la carpeta resources/views/. Las vistas tienen que ser creadas manualmente, y deben ser archivos con extensión .blade.php .

## Ruteo
Los archivos de ruteo, sirven para poder acceder a las rutas que son solicitadas desde el navegador, las cuales son traducidas por estos archivos, y se direccionan a los controladores correspondientes. Estos archivos van en la carpeta routes/, y  por lo general, las rutas se ponen en el archivo web.php .

## Archivos de migración
Los archivos de migración, nos van a servir para crear scripts de SQL, que nos van a servir para alimentar a nuestra base de datos de Tablas y de Datos.
