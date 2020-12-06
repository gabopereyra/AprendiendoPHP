<html>

<head>
    <title>Problema</title>
</head>

<body>
    <h4>Propuesta de funciones</h4>
    <p>Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades.</p>
    <p>Procesar los datos del formulario implementando una función que imprima un mensaje si las dos claves ingresadas son distintas.</p>
    <hr>
    <form action="propuesta_15_post.php" method="post">
        <p>Cargue su nombre de usuario</p>
        <input type="text" name="usuario" id="" placeholder="Cargue su usuario">
        <br>
        <p>Cargue su contraseña</p>
        <input type="password" name="clave_uno" id="" placeholder="Ingrese su clave">
        <br>
        <p>Repita su contraseña</p>
        <input type="password" name="clave_dos" id="" placeholder="Repita su clave">
        <br><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>