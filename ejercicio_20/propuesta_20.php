<html>

<head>
  <title>Problema</title>
</head>

<body>
    <p>Efectuar la modificación del nombre del curso de la tabla "cursos". Para la búsqueda ingresar el código de curso.</p>
    <hr>
  <form action="propuesta_20_post.php" method="post">
    Ingrese el codigo del curso a reemplazar:
    <input type="number" name="codigo"><br>
    <br><br>
    Ingrese el nuevo curso:
    <input type="text" name="cursoNuevo">
    <br><br>
    <input type="submit" value="REEMPLAZAR">
  </form>
</body>

</html>