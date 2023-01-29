<?php
$word = "mean";
$endPoint = "https://www.english-bangla.com/dictionary{$word}";
echo "<h1>meaning of {$word}</h1>";
// echo "<span class='format1' style='font-family:TonnyBanglaMJ, SolaimanLipi,  Times, serif'>&nbsp;জটিল, যৌগিক</span>";
$ch =curl_init($endPoint);

curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
$short_start = strpos($result,'<span class="format1">');
$short_end = strpos($result,'</span>',$short_start);
$short = substr($result, $short_start,$short_end);
echo "<strong>Word Mening</strong>:{$short}<br><br>";


$long_start = strpos($result,'<p class="">')+170;
$long_end = strpos($result,'</p>',$long_start);
$long = substr($result, $long_start, ($long_end-$long_end));
echo "<strong>Nearby Words:</strong>: {$long} <br>";


?>