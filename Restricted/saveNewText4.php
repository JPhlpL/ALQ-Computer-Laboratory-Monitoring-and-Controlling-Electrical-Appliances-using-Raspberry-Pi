<?php
$myFile = fopen("myText4.txt", "w");
$text = $_POST[newText4];
fwrite($myFile, $text);
fclose($myFile);
?>