<html>

<head>
  <title>Problema</title>
</head>

<body>
<p>Confeccionar un programa que muestre por pantalla los nombres de todos los cursos y al final la cantidad total de cursos.</p>
<hr>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select count(*) as cantidad from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $reg = mysqli_fetch_array($registros);

  echo "La cantidad de cursos son: " . $reg['cantidad'];
  echo "<br><br>Los nombres de los cursos son: <br>";



$datos = mysqli_query($conexion, "select * from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while($reg = mysqli_fetch_array($datos)){
    echo "Curso: " . $reg['nombrecurso'] . "<br>";
  }
  
  ?>
</body>

</html>