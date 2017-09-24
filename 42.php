<?php 

/*
 The n-th term of the sequence of triangle numbers is given by, t_n = ½n(n+1); so the first ten triangle numbers are:
1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...
By converting each letter in a word to a number corresponding to its alphabetical position and adding these values
we form a word value.
For example, the word value for
SKY is 19 + 11 + 25 = 55 = t10.
If the word value is a triangle number then we shall call the word a triangle word.
Using words.txt (right click and 'Save Link/Target As...'), a 16K text file containing nearly two-thousand common English words, how many are triangle words?
*/

//Ermittle die ersten Triangularen Zahlen
$triangles = array();

for($n=0; $n <= 28; $n++) {
	$triangles[] = $n * 0.5 * ( $n +1 );
}

//lies Worte aus Datei in Array
$words = explode( "," , file_get_contents("42.txt"));

//zaehle Anzahl der Worte mit Wortwert im Bereich der Triangles
$trianglewords = 0;

//gehe durch die Liste der Worte
foreach($words as $k => $word) {

	//Anzahl der Zeichen pro Zeile fuer folgende Schleife
	$len = strlen($word);
		
	//Wert des aktuellen Wortes initial 0
	$value = 0;

	//gehe durch jeden Buchstaben des aktuellen Wortes
	for($i = 0; $i < $len; $i++) {
		
		//wenn Buchstabe, nicht Anfuehrungszeichen
		if ($word[$i] != '"') {
			
			//Addiere Buchstabenwert zum Wortwert
			$value += ord($word[$i]) - 64;
			
		}
		
	}
	
	// ist Wortwert triangulare Zahl?
	
	if(in_array($value, $triangles)) {
		//Setze Zaehler der Worte mit Triangularem Wortwert hoch
		$trianglewords++;
	}
}

//Gib Ergebnis aus
echo $trianglewords;
?>