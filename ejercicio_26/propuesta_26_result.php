<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from alumnos WHERE codigoCurso=$_REQUEST[curso]") or
        die("Problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registros)) {
            echo "Alumno:" . $reg['nombre'] . "<br>";
            echo "<hr>";
        }
    mysqli_close($conexion);
    ?>
</body>

</html>