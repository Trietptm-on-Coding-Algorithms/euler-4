<?php 
$triangles = array();
for($n=0; $n <= 28; $n++) { $triangles[] = $n * 0.5 * ( $n +1 ); }
$words = explode( "," , file_get_contents("42.txt"));
$trianglewords = 0;
foreach($words as $k => $word) {
	$len = strlen($word);
	$value = 0;
	for($i = 0; $i < $len; $i++) { if ($word[$i] != '"') { $value += ord($word[$i]) - 64; } }
	if(in_array($value, $triangles)) { $trianglewords++; }
}
echo $trianglewords;
?>