<html>

<head>
    <title>Propuesta 5</title>
</head>

<body>
    <p>Mostrar la tabla de multiplicar del 2 según las diferentes estructuras.</p>
    <hr>
    <p>Primer manera, bucle FOR</p>
    <?php
    for ($i = 2; $i <= 20; $i = $i + 2) {
        echo $i . "<br>";
    }
    ?>
    <hr>
    <p>Segunda manera, bucle WHILE</p>
    <?php
    $j=2;
    while ($j <= 20){
        echo $j."<br>";
        $j = $j+2;
    }
    ?>
    <hr>
        <p>Tercera manera, bucle DO WHILE</p>
    <?php
    $j=2;
    do{
        echo $j."<br>";
        $j = $j+2;
    }
    while ($j <= 20);
    ?>


</body>

</html>