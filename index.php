<?php

include("defines.php");

$problem=1;

$problem = $_GET['prob'];






$ausf_beginn = microtime(true);

include("$problem.php");

$ausf_ende = microtime(true);

?>

<hr>

Execution time:

<?php 

echo $ausf_ende - $ausf_beginn;

?>

<hr>

<?php 

highlight_file("$problem.php");

?>