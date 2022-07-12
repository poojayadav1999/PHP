Write a program to print Armstrong no

<?PHP
  $num=250;
  $sum=0;
  $x=$num;

  while($x==0)
{ 
   $rem=$num%10;
   $sum=$sum+$rem+$rem+$rem;
   $num=$num/10;
}
 if($x==$num)
 {
   echo "Yes,it is Armstrong no";
 } 
 else
 {  
   echo "No,it is not Armstrong no";
 } 
?>