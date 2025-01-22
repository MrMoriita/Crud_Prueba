# Crud_Prueba
Prueba Técnica Jorge Lourido

Descripción del Proyecto - CRUD para Gestión de Usuarios
Este proyecto fue realizado por Jorge Lourido como prueba técnica para demostrar sus habilidades en la implementación de un CRUD (Crear, Leer, Actualizar, Eliminar) para la gestión de usuarios.

Detalles del Proyecto
El sistema permite gestionar usuarios mediante las siguientes funcionalidades:

Crear: Añadir nuevos usuarios al sistema.
Modificar: Actualizar los datos de usuarios ya existentes.
Eliminar: Eliminar usuarios del sistema.
Inactivar: Cambiar el estado de un usuario a "Inactivo", lo que le impide iniciar sesión.
Activar: Revertir el estado de un usuario de "Inactivo" a "Activo", permitiéndole iniciar sesión nuevamente.
Inicio de sesión: Sistema seguro para la autenticación de usuarios.
Gestión de sesión: Maneja la inactividad del usuario cerrando la sesión automáticamente tras un período sin actividad o si se pierde la conexión o cierra el navegador.
Registro de actividades: Guarda las acciones de los usuarios en el sistema para fines de auditoría y seguimiento.
Estructura del Proyecto
El proyecto está organizado de la siguiente manera:

api: Contiene los archivos PHP para el backend, incluyendo la conexión a la base de datos y los scripts para las operaciones CRUD.
assets: Almacena archivos estáticos como imágenes, hojas de estilo CSS y scripts JavaScript.
bd: Contiene el archivo SQL para la creación de la base de datos y sus tablas.
README.md: Proporciona información sobre el proyecto y su uso.
Configuración y Uso

Configuración de la Base de Datos: Ejecuta el script SQL en la carpeta bd para crear la base de datos y las tablas necesarias en tu servidor MySQL.

Configuración del Proyecto: Modifica las configuraciones de conexión a la base de datos en los archivos PHP dentro de la carpeta api para que coincidan con los detalles de tu servidor MySQL.

Despliegue: Sube los archivos del proyecto a tu servidor web o hosting, asegurándote de que los permisos de los archivos y carpetas sean correctos para su funcionamiento.

Acceso al Sistema: Accede al sistema desde tu navegador. Si es la primera vez, regístrate para crear una cuenta y luego inicia sesión con tus credenciales.

Tecnologías Utilizadas

Lenguajes de Programación: PHP (MVC), HTML, CSS, JavaScript
Base de Datos: MySQL
