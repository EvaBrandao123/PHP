<?php
    $num1 =2;
    $num2 = 4;
    $num3 = 6;

    $maior = $num1;
    $menor = $num1;
    
    if ($num2 > $maior) {
      $maior = $num2;
    } 
    if ($num3 > $maior) {
      $maior = $num3;
      } 
      if ($num2 < $menor) {
      $menor = $num2;
     }
     if ($num3 < $menor) {
      $menor = $num3;
      }
    echo "O maior menor é \t". $maior;
    echo "\tO menor número é \t". $menor;
   
  
?>
