<?php
$myFile = fopen("myText2.txt", "w");
$text = $_POST[newText2];
fwrite($myFile, $text);
fclose($myFile);
?>