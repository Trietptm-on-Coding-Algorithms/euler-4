<?php
/*
Alle Vielfachen von 3 und 5 unter 10:
3, 5, 6 , 9
Summe 23.

Aller Vielfachen von 3 oder 5 unter 1000
3, 5, 6, 9, 10, 12, 15, . . .
Summe ?
*/

$V = array();

$i = 1;
while($i < 1000) {
	
	if ((!($i % 3)) OR (!($i % 5))) {
			
		$V[] = $i;

	}
	
	
	$i++;
}


echo array_sum($V);



?>