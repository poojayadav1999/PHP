

  <form action="" method="POST">
  <input type="text" name="n1" value="" Placeholder="Enter first No."><br><br>
  <input type="text" name="n2" value="" Placeholder="Enter Second No."><br><br>
  <input type="submit" name="Add" value="Addition">
  <input type="submit" name="Sub" value="Substraction">
  <input type="submit" name="Mul" value="Multiplication">
  <input type="submit" name="Div" value="Division">
  </form>

  <?php

   if(isset($_POST['Add']))
   {
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $n = $n1+$n2;
      echo"Addition is:$n";

   }

   
   if(isset($_POST['Sub']))
   {
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $n = $n1-$n2;
      echo"Substraction is:" .$n;

   }

   if(isset($_POST['Mul']))
   {
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $n = $n1*$n2;
      echo"Multiplication is:$n";

   }


    if(isset($_POST['Div']))
   {
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $n = $n1/$n2;
      echo"Division is:$n";

   }







  ?>

