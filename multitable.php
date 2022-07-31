Display Multiplication Table using nested for loop

<?php
 echo"<table border='1px solid'>";
 
 for($row=1; $row<=10; $row++)
 {
   echo"<tr>\n";
   {
      for($col=1; $col<=10; $col++)
      {
        $p=$col*$row;
       echo"<td>$p</td> \n";
      }
    }
    echo"</tr>";

}
 echo"</table>";
?>