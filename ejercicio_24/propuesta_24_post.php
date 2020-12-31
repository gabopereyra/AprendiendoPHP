<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from alumnos
                        where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    if ($regalu = mysqli_fetch_array($registros)) {
    ?>
<form action="propuesta_24_tres.php" method="post">
<input type="hidden" name="codigo" value="<?php echo $regalu['codigo'] ?>">
    <label for="nombreNuevo">Nombre:</label>
    <input type="text" name="nombreNuevo" value="<?php echo $regalu['nombre']; ?>">
    <br><br>
    <label for="mailNuevo">Email:</label>
    <input type="email" name="mailNuevo" value="<?php echo $regalu['mail']; ?>">
    <br><br>
    <label for="codigocurso">Curso:</label>
    <select name="codigocurso">
        <?php
        $registros = mysqli_query($conexion, "select * from cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array($registros)) {
            if ($regalu['codigocurso'] == $reg['codigo'])
                echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecurso]</option>";
            else
                echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        }
        ?>

    </select>

    <br><br>
    <input type="submit" value="MODIFICAR">
</form>
    <?php
    } else
        echo "No existe alumno con dicho código";
    ?>
</body>

</html>