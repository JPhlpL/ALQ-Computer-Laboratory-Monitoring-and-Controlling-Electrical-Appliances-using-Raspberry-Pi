
<?php
	error_reporting(E_ALL);
	ob_start();
	session_start();
	

	?>
	
<html>
<head>
<title>asfasdf</title>

</head>

<body>
	
SWITCH 1 <button id = 'btnp1' ><?php echo checkstate(17); ?></button>
<br>
SWITCH 2 <button id = 'btnp2' ><?php echo checkstate(18); ?></button>
<br>
SWITCH 3 <button id = 'btnp3' ><?php echo checkstate(22); ?></button>
<br>
SWITCH 4 <button id = 'btnp4' ><?php echo checkstate(27); ?></button>
</body>	
<script src = "jQuery.js" type = "text/javascript"></script>
<script>
	
	$("document").ready(function(){
		$("#btnp1").click(function(){		
		$.ajax({
			url:'on.php',
			method:'GET',
			data:{
				pin:17
				},
					success:function(data){
					document.getElementById("btnp1").innerHTML = data;
					window.location.reload();
				}
			});//ajax
			
		});//btn
		$("#btnp2").click(function(){		
		$.ajax({
			url:'on.php',
			method:'GET',
			data:{
				pin:18
				},
					success:function(data){
					document.getElementById("btnp2").innerHTML = data;
					window.location.reload();
				}
			});//ajax
			
		});//btn
		$("#btnp3").click(function(){		
		$.ajax({
			url:'on.php',
			method:'GET',
			data:{
				pin:22
				},
					success:function(data){
					document.getElementById("btnp3").innerHTML = data;
					window.location.reload();
				}
			});//ajax
			
		});//btn
		$("#btnp4").click(function(){		
		$.ajax({
			url:'on.php',
			method:'GET',
			data:{
				pin:27
				},
					success:function(data){
					document.getElementById("btnp4").innerHTML = data;
					window.location.reload();
				}
			});//ajax
			
		});//btn
		
		  
			
			
});//docready

</script>

</html>





<?php

function checkstate($pin)
{
  $p= shell_exec("gpio -g read $pin");
  if($p == 1){
	return "OFF";
	}
	else{
	return "ON";
	}
}

?>



