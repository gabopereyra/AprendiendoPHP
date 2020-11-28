<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if ($_REQUEST['radio1'] == "sinEstudios") {
    echo "La persona NO posee estudios";
  } elseif ($_REQUEST['radio1'] == "primario"){
    echo "La persona posee estudios primarios";
 } elseif ($_REQUEST['radio1'] == "secundario"){
    echo "La persona posee estudios secundarios";
 }
    
  ?>
</body>

</html>