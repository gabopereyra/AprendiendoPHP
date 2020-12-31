<html>

<head>
  <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "update alumnos
                          set nombre='$_REQUEST[nombreNuevo]', mail='$_REQUEST[mailNuevo]', codigocurso=$_REQUEST[codigocurso]
                        where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "Los datos fueron modificados con exito";
    ?>

</body>

</html>