<html>

<head>
  <title>Problema</title>
</head>

<body>
<p>Primer ejercicio:</p>
  <?php
  $valor = rand(1, 10);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 5) {
    echo "Es menor o igual a 5";
  } else {
    echo "Es mayor a 5";
  }
  ?>
  <hr>
  <p>Segundo ejercicio:</p>
  <?php
  $valor = rand(1, 100);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 9) {
    echo "Tiene un dígito";
  } else {
    if ($valor < 100) {
      echo "Tiene 2 dígitos";
    } else {
      echo "Tiene 3 dígitos";
    }
  }
  ?>
  <hr>
  <p>Tercer ejercicio: (con elseif)</p>
  <?php
  $valor = rand(1, 100);
  echo "El valor sorteado es $valor<br>";
  if ($valor <= 9) {
    echo "Tiene un dígito";
  } elseif ($valor < 100) {
    echo "Tiene 2 dígitos";
  } else {
    echo "Tiene 3 dígitos";
  }
  ?>
</body>

</html>