<html>

<head>
  <title>Captura de datos propuesta</title>
</head>

<body>

  <?php
  echo "El nombre ingresado es: ";
  echo $_REQUEST['nombre'];
  echo "<br><br>";
  if($_REQUEST['edad'] >= 18){
      echo "Es mayor de edad";
  } else{
      echo "Es menor de edad";
  }
  ?>

</body>

</html>