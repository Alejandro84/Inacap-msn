###################
INACAP MSN
###################

Los modulos...
- usuarios
- alumnos
- mensaje

Cada modulo debe tener los siguientes archivos:
( tomando como ejemplo usuarios )

/application/controllers/Usuario_controlller.php
/applicaion/models/Usuario.php

/application/views/usuario/listar.php
/application/views/usuario/nuevo.php
/application/views/usuario/editar.php

## En el controlador necesitamos los metodos:

* index -> aqui listamos la información de la db.
* nuevo -> formulario para crear nueva fila.
* guardar -> recibe los datos del formulario "nuevo".
* editar -> carga el formulario con datos para actualizar.
* actualizr -> recibe los nuevos datos del formulario "editar".
* eliminar -> recibe el id de una fila para actualizarla con estado 0.

## En el modelo necesitamos los metodos:

* getAll -> devuelve un objeto con todas las filas con la columna estado en 1.
* getTrash -> devuelve un objeto con todas las filas con la columna estado en 0.
* insertar -> recibe un array con los datos procesados en el controlador para insertar una nueva fila.
* guardar -> recibe un array con los datos procesados en el controlador para actualizar una fila existente.
