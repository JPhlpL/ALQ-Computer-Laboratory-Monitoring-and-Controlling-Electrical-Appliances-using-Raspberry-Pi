<?php
$myFile = fopen("myText3.txt", "w");
$text = $_POST[newText3];
fwrite($myFile, $text);
fclose($myFile);
?>