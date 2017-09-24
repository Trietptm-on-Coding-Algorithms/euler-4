<?php 
/*
 2520 is the smallest number that can be divided by each of the
numbers from 1 to 10 without any remainder.
What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/


ini_set("max_execution_time", 1000);


// Hier die Config Konstanten
define("SETTING_VON", 1);
define("SETTING_BIS", 20);

$range = array();

for($i = SETTING_VON; $i <= SETTING_BIS ; $i++) {	
	//if(gmp_prob_prime($i) == 2) {
		$range[] = $i;	
}


print_r($range);
echo "<hr>";


if( 0 ) {
define("D", true);
} else {
define("D", false);
}



$abbruch = false;
$i = 1;

do {

	echo D ? $i : "";
	echo D ? ":" : "";

	$hat_rest = false;

	foreach($range as $k => $divisor) {

		/*
		 * Wenn fuer diese zahl bereits ein Divisor nicht teilbar war,
		* brauchen die anderen divisoren nicht berechnet werden.
		* verlasse Schleife
		*/

		if ($hat_rest) {
			break;
		}

		$rest = $i % $divisor;

		echo D ? $rest : "";
		
		if ($rest != 0) {
			$hat_rest = true;
		}


		//$divisor++;



	}


	echo D ? "($hat_rest)" : "";
	echo D ? "<br>" : "";

	if($hat_rest == 0) {
		echo $i;
		$abbruch = true;
	}

	$i++;

} while (!$abbruch);

?>