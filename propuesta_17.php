<html>

<head>
  <title>Problema</title>
</head>

<body>

<p>Confeccionar un programa que recupere los datos de la tabla cursos de la base de datos base1. Mostrar el código de curso y su nombre.</p>
<hr>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo curso: " . $reg['codigo'] . "<br>";
    echo "Nombre curso: " . $reg['nombrecurso'] . "<br>";
    echo "<br>";
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>

</body>

</html>