<?php

$zahl_array = range(1, 1000000);

foreach($zahl_array as $k => $zahl) {

	echo $zahl;
	echo " -> ";

	$i = 0;
	while($i < 10) {

		// Der Zahl die getrennt werden soll
		settype($zahl, "string");

		// Setzt nach jeder Ziffer ein Leerzeichen
		$string2  = chunk_split("$zahl",1," ");

		// Teilt den String2 nach dem Leerzeichen
		$array = explode(" ",trim($string2));

		/*
		 echo "<pre>";
		print_r($array);
		echo "</pre>";
		*/

		$erg = "";


		foreach($array as $k => $v)  {
			$erg += pow($v, 2);
		}

		echo $zahl = $erg;

		$i++;

		echo " - ";
	}


echo "<br>";
}
?>