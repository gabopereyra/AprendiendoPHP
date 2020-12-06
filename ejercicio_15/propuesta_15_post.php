<html>

<head>
  <title>Problema</title>
</head>

<body>
<p>Resultado de validación del password:</p>
  <?php
    $valor1=$_REQUEST['clave_uno'];
    $valor2=$_REQUEST['clave_dos'];
    function validar($uno, $dos){
        if($uno == $dos){
            echo "Las constraseñas son iguales";
        } else{
            echo "Las contraseñas NO son identicas";
        }
    }
    validar($valor1, $valor2);

  ?>
</body>

</html>




 