<html>

<head>
  <title>Problema</title>
</head>

<body>
    <p>Confeccionar un programa en PHP que permita hacer el pedido de pizzas via internet.</p>
    <p>El formulario debe ser:</p>
<ul>
    <li>Nombre:[..............]</li>
    <li>Direccion:[...................]</li>
    <li>Jamon y queso:[x]</li>
    <li>Cantidad[...]</li>
    <li>Napolitana:[x]</li>
    <li>Cantidad[...]</li>
    <li>Muzzarella:[x]</li>
    <li>Cantidad[...]</li>
</ul>
<p>[Confirmar]</p>
<p>Para el ingreso del nombre, dirección y cantidad de pizzas de cada tipo disponer objetos de la clase "text".</p>
<p>Disponer tres objetos de tipo "checkbox" para seleccionar los tipos de pizzas.</p>
<p>Por último disponer un botón para el envío de datos: "submit".</p>
<p>Grabar en un archivo de texto llamado "pedidos.txt" cada pedido, separados por una línea de puntos entre cada pedido.</p>
<hr>

  <form action="propuesta_12_post.php" method="post">
    <p>Ingrese su nombre:</p>
    <input type="text" name="nombre">
    <br>
    <p>Ingrese su dirección:</p>
    <input type="text" name="dir">
    <br>
    <p>Indique tipo de pizza y cantidad</p>
    <input type="checkbox" name="JamonYQueso">Jamón y queso
    <input type="number" name="tipoUno" min=0>
    <br><br>
    <input type="checkbox" name="Napolitana">Napolitana
    <input type="number" name="tipoDos" min=0>
    <br><br>
    <input type="checkbox" name="Muzarrella">Muzarella
    <input type="number" name="tipoTres" min=0>
    <br><br>
    <input type="submit" value="Realizar pedido!">
  </form>
</body>

</html>