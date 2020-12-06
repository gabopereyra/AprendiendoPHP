<html>

<head>
  <title>Problema</title>
</head>

<body>
<p>Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre. Imprimir las componentes a través de un foreach.</p>
<hr>
  <?php
  $claves = array(
    'usuario_1' => 'clave_1',
    'usuario_2' => 'clave_2',
    'usuario_3' => 'clave_3',
    'usuario_4' => 'clave_4',
    'usuario_5' => 'clave_5'
  );

  foreach ($claves as $clave => $valor) {
    echo 'Para: ' . $clave . ", la clave es: " . $valor;
    echo "<br><br>";
  }
  ?>

</body>

</html>