<html>

<head>
  <title>Problema</title>
</head>

<body>
<p>Primer ejemplo, definido de manera individual cada componente y leyendo con un FOR</p>
  <?php
  $nombres[] = "juan";
  $nombres[] = "pedro";
  $nombres[] = "ana";
  for ($f = 0; $f < count($nombres); $f++) {
    echo $nombres[$f];
    echo "<br>";
  }
  ?>
  <hr>

<p>Agregando los elementos a través de "array" y leyendo con foreach</p>

<?php
  $edades = array("10", "15", "21", "32");
  foreach ($edades as $edad) {
    echo $edad;
    echo "<br>";
  }
  ?>
</body>

</html>