<?php
set_time_limit(0);//unlimited times for this method
$ch =curl_init('https://images.pexels.com/photos/3791466/pexels-photo-3791466.jpeg');
$fileName =fopen("image2.jpg","w");
curl_setopt($ch,CURLOPT_FILE,$fileName);
curl_exec($ch);


?>