<?php 
$code = "5_code.php";

$ausf_beginn = microtime(true);



include($code);

$ausf_ende = microtime(true);
?>

<hr>
Execution time: 
<?php 
echo $ausf_ende - $ausf_beginn;

?>
<hr>
<?php 
//highlight_file($code);
?>