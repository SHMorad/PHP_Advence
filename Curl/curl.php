<?php
// $ch=curl_init('http://localhost/PhpByHasinHayder/PHP_Advence/Curl/hello.php');//Very use full;
$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,'http://localhost/PhpByHasinHayder/PHP_Advence/Curl/hello.php');//use full but less than upper line;
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_POSTFIELDS,'secret=noodles');
curl_exec($ch);


?>