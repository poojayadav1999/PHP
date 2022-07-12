Sum Of Digits of a number

<?PHP

  $num=1234;
  $sum=0; $rem=0;
  
  for($i=0; $i<=strlen($num); $i++) 
{

    $rem=$num%10;
    $sum=$sum+$rem;
    $num=$num/10; 
  
}
echo "<br>";
echo"sum of digits of no:$sum";

?>