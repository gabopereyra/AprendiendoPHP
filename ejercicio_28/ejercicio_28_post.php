<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php

    copy($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
    echo "El archivo se registro en el servidor.<br>";
    $nom = $_FILES['archivo']['name'];
    echo "<img src=\"$nom\">";
  ?>
</body>

</html>