Write a PHP Program Reverse no

<?PHP
 $num=1234;
 $revnum=0;
 
 while($num > 1)
 {
   $rem=$num%10;
   $revnum=$revnum*10+$rem;
   $num=$num/10;
 }
 echo "<br>";
 echo "Reverse no is: $revnum";

?>