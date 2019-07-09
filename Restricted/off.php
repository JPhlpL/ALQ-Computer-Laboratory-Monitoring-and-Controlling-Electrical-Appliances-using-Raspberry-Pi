 <?php
 $pin = $_GET['pin'];
 //$pin=17;
 shell_exec("gpio -g write '$pin' 1"); 
 ?>
 
 
