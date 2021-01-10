<html>

<head>
  <title>Problema</title>
</head>

<body>
<p>Confeccionar un programa que permita hacer multiples upload con una página (por ejemplo que permita seleccionar hasta 3 archivos)</p>
<hr>
  <form action="propuesta_28_post.php" method="post" enctype="multipart/form-data">
    Seleccione el archivo:
    <input type="file" name="archivoUno">
    <br><br>
    Seleccione el archivo:
    <input type="file" name="archivoDos">
    <br><br>
    Seleccione el archivo:
    <input type="file" name="archivoTres">
    <br><br>
    <input type="submit" value="ENVIAR">
  </form>
</body>

</html>