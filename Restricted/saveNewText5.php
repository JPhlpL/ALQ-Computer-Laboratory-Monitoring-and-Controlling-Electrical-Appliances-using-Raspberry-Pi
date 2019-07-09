<?php
$myFile = fopen("myText5.txt", "w");
$text = $_POST[newText5];
fwrite($myFile, $text);
fclose($myFile);
?>