<html>

<head>
  <title>Problema</title>
</head>

<body>
<?php
  if ($_REQUEST['operacion'] == "alto") {
    echo "La persona DEBE paga ganancias.";
  } else{
    echo "La persona no paga ganancias.";
  }
  ?>
</body>

</html>