Write a PHP Program of Fibonacci series

<?PHP
  $num=0;
  $n1=0;
  $n2=1;
  echo "fibonacci series of first 12 numbers";
  echo $n1 .''.$n2 .''.  
   while($num<10)
  {
    $n3=$n1+$n2;
    $n1=$n2;
    $n2=$n3;
    $num=$num+1;   
  }
   


?>