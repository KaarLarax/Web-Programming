<html>

<head>
    <title>Sistema Web</title>
</head>

<body>
    <div align="center">
        <h1>Agregar un registro
            <form action="c-crud.php" method="post">
                <br>Creación de un nuevo registro
                <br>Id del cliente:
                <input type="text" name="id_cliente" required>
                <br>Nombre del cliente:
                <input type="text" name="nombre_cliente" required>
                <br>Apellifo del cliente:
                <input type="text" name="apellido_cliente" required>
                <br>
                <input type="submit" value="Agregar registro">
            </form>
            <form action="r-crud-t1.php">
                <input type="submit" value="Consultar registros">
            </form>
            <form action="d-crud.php" method="post">
                <input type="text" name="elid"> <br>
                <input type="submit" value="Eliminar Registro">
            </form>
            <form action="u-crud.php" method="post">
                <br>Actualización de cliente<br>
                Id del cliente a actualizar:
                <input type="text" name="elifc"><br>
                Nombre del cliente:
                <input type="text" name="elnomc"><br>
                Apellido del cliente:
                <input type="text" name="elapc"><br>
                <input type="submit" value="Actualizar Registro">
            </form>
        </h1>
    </div>
</body>
</html>