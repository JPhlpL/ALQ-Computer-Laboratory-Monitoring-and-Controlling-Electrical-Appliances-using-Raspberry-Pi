<?php
$myFile = fopen("myText.txt", "w");
$text = $_POST[newText];
fwrite($myFile, $text);
fclose($myFile);
?>