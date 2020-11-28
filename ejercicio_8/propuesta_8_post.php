<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if (isset($_REQUEST['futbol'])) {
    
    echo "La persona práctica FUTBOL. <br>";
  }
  if (isset($_REQUEST['basket'])) {
    
    echo "La persona práctica BASKET.<br>";
  }
  if (isset($_REQUEST['tenis'])) {
    
    echo "La persona práctica TENIS. <br>";
  }
  if (isset($_REQUEST['voley'])) {
    
    echo "La persona práctica VOLEY. <br>";
  } 
  ?>
</body>

</html>