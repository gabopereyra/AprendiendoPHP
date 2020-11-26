<html>

<head>
    <title>Problema 4</title>
</head>

<body>
    <p>Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string "tres").</p>
    <hr>
    <?php
    $valor = rand(1, 3);
    if ($valor == 1) {
        echo "El número generado es el: UNO";
    } elseif ($valor == 2) {
        echo "El número generado es el: DOS";
    } else {
        echo "El número generado es el: TRES";
    }
    ?>
</body>

</html>