<?php



$myfile = fopen("yupo.txt", "w") or die("Unable to open file!");
$txt = "lat: " . $_GET["lat"] ."\nlong: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"];
fwrite($myfile, $txt);
fclose($myfile);





?>