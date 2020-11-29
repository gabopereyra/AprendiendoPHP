<html>

<head>
  <title>Problema</title>
</head>

<body>
<p>Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último elemento del vector.</p>

  <?php
$dias=array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
echo "El primer dia de la semana es: ".$dias[0]."<br>"."El último dia de la semana es: ".$dias[6]."<hr>";
echo "El siguiente es el resultado de haber leido el array con un foreach<br><br>";
foreach ($dias as $dia){
    echo $dia;
    echo "<br>";
}
  ?>
</body>

</html>