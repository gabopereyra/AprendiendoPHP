<head>
    <title>Problema</title>
</head>

<body>

    <?php

    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from cursos where codigo=$_REQUEST[codigo]") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "update cursos
                          set nombrecurso='$_REQUEST[cursoNuevo]' 
                        where codigo=$_REQUEST[codigo]") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "El curso fue modificado con exito";
    } else {
        echo "No existe el curso ingresado para modificar";
    }
    ?>
</body>

</html>