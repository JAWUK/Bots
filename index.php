<?php

$botToken = "163779945:AAEA0uBzrH-AkNol1_0XBx8SKWcqCRgFpQY";
$website = "http://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

&updateArray = json_decode(&update, TRUE);

print_r($updateArray);

?>
