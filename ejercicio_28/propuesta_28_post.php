<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    copy($_FILES['archivoUno']['tmp_name'], $_FILES['archivoUno']['name']);
    echo "El archivo se registro en el servidor.<br><br>";
    copy($_FILES['archivoDos']['tmp_name'], $_FILES['archivoDos']['name']);
    echo "El archivo se registro en el servidor.<br><br>";
    copy($_FILES['archivoTres']['tmp_name'], $_FILES['archivoTres']['name']);
  ?>
</body>

</html>