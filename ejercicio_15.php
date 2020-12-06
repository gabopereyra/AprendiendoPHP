<html>

<head>
  <title>Problema</title>
</head>

<body>
<h1>FUNCIONES</h1>
<hr>
<p>Primer ejemplo</p>
<p>Funcion para mostrar un titulo (h3) centrado</p>
  <?php
  function mostrartitulo($men)
  {
    echo "<h3 style=\"text-align:center\">";
    echo $men;
    echo "</h3>";
  }

  mostrartitulo("Primer titulo");
  echo "<br>";
  mostrartitulo("Segundo segundo");
  ?>

<hr>
<p>Segundo ejemplo</p>
<p>Funcion para retornarpromedio un promedio entre dos valores</p>
<?php
  function retornarpromedio($valor1, $valor2)
  {
    $pro = $valor1 / $valor2;
    return $pro;
  }

  $v1 = 100;
  $v2 = 50;
  $p = retornarpromedio($v1, $v2);
  echo $p;
  ?>
<hr>
<p>Tercer ejemplo</p>
<p>Funcion con empleo de parametros por referencia</p>

<?php
  function cuadradocubo($valor, &$cuad, &$cub)
  {
    $cuad = $valor * $valor;
    $cub = $valor * $valor * $valor;
  }
  cuadradocubo(2, $c1, $c2);
  echo "El cuadrado de 2 es: " . $c1 . "<br>";
  echo "El cubo de 2 es: " . $c2;
  ?>

</body>

</html>