Program of Type Casting of a variable

<?php

  $a = 5;
  echo"<br>";
  var_dump($a);
  echo"<br>";

  $a = (float)$a;
  var_dump($a);
  echo"<br>";

  $a = (string)$a;
  var_dump($a);
  echo"<br>";

  $a = (bool)$a;
  var_dump($a);
  echo"<br>";

  $a = (array)$a;
  var_dump($a);
  echo"<br>";

  $a = (object)$a;
  var_dump($a);
  echo"<br>";

  $b = 3.2;
  var_dump($b);
  echo"<br>";

  $c = True;
  var_dump($c);



?>