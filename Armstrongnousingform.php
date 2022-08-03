Armstrong Number Using Form in PHP

<!Doctype html>
<html>
<head>
  <title>Armstrong Number</title>

  <body>
    
    <form action="" method="POST">
    Enter the Number : 
    <input type="text" name="Number">
    <input type="submit" value="Submit">  
    </form>

  </body>

  <?php
   
   if($_POST)
   {
      $num = $_POST['Number'];
      
      $rem;
      $sum = 0;
      $x = $num;
 
      while($num!=0)
      {
         $rem = $num%10;
         $sum = $sum+$rem*$rem*$rem;
         $num = $num/10;   
      }
    
      
      if($x == $sum)
      {
         echo "Number is Armstrong\n";
      }
      else
      {
         echo "Number is not Armstrong\n";
      } 
   }

  ?> 

</head>
</html>