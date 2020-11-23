<html>

<head></head>

<body>
  <?php
  $num = rand(0, 100);
  echo $num;
  echo "<hr>";

  if ($num < 50) {
    echo "Es menor a 50";
  } else {
    echo "Es mayor a 50";
  }
  ?>
</body>

</html>