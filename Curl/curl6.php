<?php
require_once "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser;

$word = "complete";
$endPoint = "https://www.vocabulary.com/dictionary/{$word}";
echo "Meaning Of {$word}";
$ch = curl_init($endPoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
$dom = HtmlDomParser::str_get_html($result);
$short = $dom->getElementByTagName("p.short");



echo "<strong>Short Meaning</strong> :{$short}";
$long = $dom->getElementByTagName("p.long");

echo "<strong>Long Meaning</strong>:{$long}<br>";

$alldd = $dom->find("p short");
echo $alldd[2]




/* $word="complete";
$endPoint = "https://www.vocabulary.com/dictionary/{$word}";
echo "Meaning Of {$word}";
$ch = curl_init($endPoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
// $html =file_get_html($result);
foreach($result->find('short') as $element){
    echo $element->short;
} */
       
?>