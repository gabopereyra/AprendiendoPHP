<html>

<head>
  <title>Problema</title>
</head>

<body>
  <form action="ejercicio_21_post.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br><br>
    Ingrese mail:
    <input type="text" name="mail"><br><br>
    Seleccione el curso:
    <select name="curso">
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

      $registros = mysqli_query($conexion, "select * from cursos") or
        die("Problemas en el select:" . mysqli_error($conexion));
      while ($reg = mysqli_fetch_array($registros)) {
        echo "<option value=".$reg['codigo'].">".$reg['nombrecurso']."</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Registrar">
  </form>
</body>

</html>