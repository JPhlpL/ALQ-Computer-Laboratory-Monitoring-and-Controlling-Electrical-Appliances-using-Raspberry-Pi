 <?php
 $pin = $_GET['pin'];

function checkstate($pin)
{
  return shell_exec("gpio -g read $pin");
}

$state =  checkstate($pin);

//0ff
if($state==1){
	 shell_exec("gpio -g write '$pin' 0"); 	
	 $color = 'blue';
}else{
	shell_exec("gpio -g write '$pin' 1"); 	
	$color = 'red';
}

	if($state==1){
	echo "ON";
	}
	else{
	echo "OFF";
	}
 
 ?>
