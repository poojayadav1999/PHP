Write a PHP Program Palindrom no

<?PHP
 $num = 404;
 $x= $num;
 $sum = 0;
 while(floor($num))
 {
   $rem=$num%10;
   $sum=$sum*10+$rem;
   $num=$num/10;
 }
 if($x==$sum)
{ 
  echo "<br>" ;
  echo "no is Palindrom";
}
else
{
  echo "<br>" ;  
  echo "no is not Palindrom";
}

?>