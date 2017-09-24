<?php // aaa-zzz.php
/*

Gibt alle moeglichen Zeichenfolgen von aaa bis zzz aus.

*/

$i = 97;

while($i <= 122) {
	$a[] = chr($i);
	$i++;
}

$b = $c = $a;

foreach($a as $k => $v) {
	//erster Buchstabe
	$q = $v;

	foreach($b as $k => $v) {
		// zweiter Buchstabe
		$w = $v;

		foreach($c as $k => $v) {
			// dritter
			$e = $v;

			echo $q.$w.$e."<br>";

		}
	}
}







?>