<html>

<head>
    <title>Problema</title>
</head>

<body>

    <?php

    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from alumnos where mail='$_REQUEST[mailViejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "update alumnos
                          set mail='$_REQUEST[mailNuevo]' 
                        where mail='$_REQUEST[mailViejo]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "El mail fue modificado con exito";
    } else {
        echo "No existe el mail ingresado para modificar";
    }
    ?>
</body>

</html>