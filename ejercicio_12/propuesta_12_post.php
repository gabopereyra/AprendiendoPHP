<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $ar = fopen("pedidos.txt", "a") or
        die("Problemas en la creacion");
    fputs($ar, $_REQUEST['nombre'] . "\n" . $_REQUEST['dir'] . "\n");
    if (isset($_REQUEST['JamonYQueso'])) {
        fputs($ar, "Jamon y Queso: " . $_REQUEST['tipoUno']. "\n");
    }
    if (isset($_REQUEST['Napolitana'])) {
        fputs($ar, "Napolitana: " . $_REQUEST['tipoDos']. "\n");
    }
    if (isset($_REQUEST['Muzarrella'])) {
        fputs($ar, "Muzarella: " . $_REQUEST['tipoTres']. "\n");
    }
    fputs($ar, "----------------------");
    fclose($ar);
    echo "El pedido fue recibido correctamente.";
    ?>
</body>

</html>