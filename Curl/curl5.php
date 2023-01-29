<?php
$word="ready";
$ch = curl_init("https://www.english-bangla.com/dictionary/{$word}");
// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$result =curl_exec($ch);
$error =curl_error($ch);
if($error){
    return $error;
}

?>