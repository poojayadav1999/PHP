<?php
 
 function ternary_test($n){

  $r = ($n>30)
  ? "Greater than 30"
  : ($n>20
  ? "Greater than 20"
  : ($n>10 
  ? "Greater than 10"
  : "Input a no atleast 10!"));
 
   echo $n." : " .$r. "\n";
  }
   
  ternary_test(50);
  ternary_test(8);

?>