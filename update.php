<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$homepage = file_get_contents('text/'.$ip.'/log.txt');
echo $homepage; 
?>