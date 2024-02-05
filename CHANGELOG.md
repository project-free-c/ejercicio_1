## [webFactura]


## NEW VERSION [1.0.0] - 2024-02-02
### Added
- https://github.com/training-webFactura/ejercicio_1/commit/87e1dc97cc5ab0c32303385af225e618ed075a4e
    - feat(): Agregar el repositorio a git y exportar excel

- https://github.com/training-webFactura/ejercicio_1/commit/87e1dc97cc5ab0c32303385af225e618ed075a4e

- Desarrollador Responsable : Esteban Cárdenas, Nibaldo Chavez

### Entidades
- src/Entity/Users.php 
    - Nuevo modelo para usuario.
        - Nombre : Users

### Clases
- No presentaron cambios.

### Controladores
- src/Controller/ExcelController.php 
    - Nueva funcion de routamiento para exportar excel.
        - Nombre : donwloadExcel
    - Nueva funcion de routamiento para vizualizar.
        - Nombre : generarExcel
    
### Formularios
- src/Form/FormSelectType.php 
    - Nueva formulario para selecionar las columnas que se quiere descargar.

### Comandos
- No presentaron cambios.

### Vistas
- src/Twing/Components/GenerateExcel.php
    - Incorpora la creación del formulario y botón.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- Tablas
    - Creación de la tabla 'Users'.
        - id
        - rut
        - name
        - last_name
        - address
        - phone
        - email
    - inserción de datos a la tabla 'Users' con 29 registros.

- Procedimientos Almacenados
    - No presentaron cambios.

 - Vistas
    - No presentaron cambios.

### Rutas
- src/Controller/ExcelController.php 
    - Nuevas rutas.
        - Nombre ruta : generarExcel
        - Nombre ruta : donwloadExcel
____________________________________________________________________________________________________________________

## NEW VERSION [1.1.0] - 2024-02-02
### Added
- Se modificó el archivo README.md con el objetivo de sellar el nombre de los autores del proyecto práctico.
- https://github.com/training-webFactura/ejercicio_1/commit/78eb93714b9f82a768d3bb9cd2bc7de916dd076e
    - feat(): Firma de los autores.

- Desarrollador Responsable : Esteban Cárdenas

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- No presentaron cambios.
    
### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

____________________________________________________________________________________________________________________

## NEW VERSION [1.2.0] - 2024-02-02
### Added

- https://github.com/training-webFactura/ejercicio_1/commit/5f84afbe8f3818bf09b36c71746c1cc180105b9e
    - feat(): Validación de si no existe el campo y archivo configuración.

- Desarrollador Responsable : Nibaldo chavez

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- src/Controller/ExcelController.php 
    - Nueva validación para configuración y validación si no existe el campo.
        - Nombre : donwloadExcel
    
### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Config
- config/services.yml
    - Se agrego el import de "config/packages/parameters.yaml"
- config/packages/parameters.yaml
    - Se creo la configuración parameters.yaml

____________________________________________________________________________________________________________________

## NEW VERSION [1.3.0] - 2024-02-02
### Added
- Se agregó un nuevo parametro que permite la confg. del color de la celda en el archivo excel generado "fieldColorBackground". 
- Se agregó la fucnionalidad que recorre las celdas del excel generado y llenado de color.

- https://github.com/training-webFactura/ejercicio_1/commit/f00b3a155880c757e21aee3f84a131668c005303
    - feat(): Función llenar celdas que tengan datos.

- Desarrollador Responsable : Esteban Cárdenas

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- src/Controller/ExcelController.php 
    - Nueva funcion de colorear las celdas excel.
        - Nombre : donwloadExcel
    - Variable con el parametro que permite llenar las celdas con el color indicado en parameters.yaml.
        - Nombre : $fieldColorBackground
    
### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Config
- config/packages/parameters.yaml
    - Se agregó el "fieldColorBackground"
____________________________________________________________________________________________________________________
 
 ## NEW VERSION [1.4.0] - 2024-02-02
### Added
- Se validó la confg. del color de la celda en el archivo excel. 
- Se eliminó el error que no permitía solicitar más campos en la grilla si no se indicaban la misma cantidad de colores.

- https://github.com/training-webFactura/ejercicio_1/commit/f00b3a155880c757e21aee3f84a131668c005303
    - feat(): Función validada y que añade un color a cada celda con datos y repetir si son más de los colores indicados previamente.

- Desarrollador Responsable : Esteban Cárdenas

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- src/Controller/ExcelController.php 
    - Se agregó la sentencia IF capaz de distinguir entre la cantidad de filas de datos solicitadas y el color asignado a dicha fila.
    
### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Config
- No presentaron cambios.

