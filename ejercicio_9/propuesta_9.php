<html>

<head>
  <title>Problema</title>
</head>

<body>
  <form action="propuesta_9_post.php" method="post">
    <p>Propuesta para entender el control select</p>
    <p>Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último permitir la selección de los ingresos mensuales de la persona: < 25000, 25000-50000, >50000</p>
    <p>En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 50000)</p>
    <hr>
    Seleccione la opción de ingresos correspondiente:
    <br><br>
    <select name="operacion">
      <option value="bajo">< 25000</option>
      <option value="medio">25000-50000</option>
      <option value="alto">> 50000</option>
    </select>
    <br><br>
    <input type="submit" name="operar" value="ENVIAR">
  </form>
</body>

</html>