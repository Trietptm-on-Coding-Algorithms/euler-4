<?php

$a = array(1, 1);
echo "1<br>1<br>";

$i = 0;

$x = true;

while($x) {

  $i++;

  echo $a[] = $l = $a[$i] + $a[$i-1];

  echo " (". strlen($l). ")";

  if(strlen($l) == 4) {
  
    $x = false;
  }
      
  echo " <br>";

  
}

?>