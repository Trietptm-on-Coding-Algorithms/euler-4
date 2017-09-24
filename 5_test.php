<?php 

// Hier die Config Konstanten
define("SETTING_VON", 2);
define("SETTING_BIS", 10);



//$range = array(1,2,3,4,5,6,7,8,9,10);

$range = array();

for($i = SETTING_VON; $i <= SETTING_BIS ; $i++) {
	
	if(gmp_prob_prime($i) <= 1) {
	
		echo $range[] = $i;
	}
	
}

?>