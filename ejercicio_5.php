<html>

<head>
    <title>Problema 5</title>
</head>

<body>
    <h4>Estructuras repetitivas</h4>
    <hr>
    <p>Resultado de estructura FOR:</p>
    <p>Estructura que devuelve numeros del 1 al 10, subiendo de a 1 unidad</p>
    <?php
    for ($f = 1; $f <= 10; $f++) {
        echo $f;
        echo "<br>";
    }
    ?>
    <hr>
    <p>Resultado de estructura WHILE:</p>
    <p>Estructura que devuelve resultados hasta que un valor de inicio es mayor que un valor de iniciacion</p>

    <?php
    $valor = rand(1, 10);
    $inicio = 1;
    while ($inicio <= $valor) {
        echo $inicio;
        echo "<br>";
        $inicio++;
    }
    ?>
    <hr>
    <p>Resultado de estructura DO WHILE:</p>
    <p>Estructura que devuelve resultados hasta que un valor de inicio es mayor que un valor de referencia (10 en este caso), el bucle esta programado para subir de a 2 unidades</p>

    <?php
    $f = 10;
    echo "El valor de inicio es: ".$f;
    echo "<br>";
    echo "Los valores del bucle son:";
    do {
        $f = $f + 2;
        echo $f;
        echo "-";
        
    } while ($f <= 10);
    ?>
</body>

</html>