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
