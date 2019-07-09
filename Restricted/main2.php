<?php
	error_reporting(E_ALL);
	ob_start();
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="buttondaw.css">
	<link rel="stylesheet" type="text/css" href="Navbar.css">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="Contain.css">
	<link rel="stylesheet" type="text/css" href="Cnt.css">
</head>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<link rel="icon" href="alq.png">
<title>Switch</title>
<body class="cont">
<div class="navbar">
  <div class="dropdown">
  <button class="dropbtn" id="cute1">Menu</button>
  <div class="dropdown-content">
   <a class="active" href="main2.php">Switch</a>
   <!--<a href="timer.php">Timer</a>-->
  <a href="stats2.php">Status</a>
  <a href="../index.php">Log-Out</a>
  </div>
 <div class="styletime"><?php date_default_timezone_set("Asia/Manila"); echo "Time: " . date("D F j, Y, g:i a"); ?> </div>
 </div>
</div>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<div class= "switch">
<!-- OUTLET1 -->
<table border= solid 1px class="t1">
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3">Outlet 1</th>
		</tr>
		<tr>
			<td bgcolor="lightgrey"><div class="0">
	<!-- SWITCH1 -->
	<button id = 'btnp1'  class="btn1"><?php echo checkstate(17); ?></button>
	<!-- SWITCH1 -->
	</div>
<th>
<div>
<img src="try.png">
</div>
</th>
</td>
<td bgcolor="lightgrey" width = 150>
	Electrical Appliance #1
</td>
</tr>
<!-- OUTLET2 -->
<table border= solid 1px class="t2">
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3">Outlet 2</th>
		</tr>
		<tr>
			<td bgcolor="lightgrey"><div class="0">
	<!-- SWITCH2 -->
	 <button id = 'btnp2' class="btn2" ><?php echo checkstate(18); ?></button>
	<!-- SWITCH2 -->
		</div>
<th>
<div>
<img src="try.png">
</div>
</th >
</td>
<td bgcolor="lightgrey" width = 150>
	Electrical Appliance #2
</td>
</tr>
<!-- OUTLET3 -->
<table border= solid 1px position= center class="t3">
	<tr><th width= 100%, bgcolor="#fff" colspan="3">Outlet 3</th></tr>
	<tr>
		<td bgcolor="lightgrey"><div class="0">
	<!-- SWITCH3 -->
	 <button id = 'btnp3' class="btn3" ><?php echo checkstate(22); ?></button>
	<!-- SWITCH3 -->
</div>
<th>
<div>
<img src="try.png">
</div>
</th>
</td>
<td bgcolor="lightgrey" width = 150>
	Electrical Appliance #3
</td>

</tr>
<!-- OUTLET4 -->
<table border= solid 1px class="t4">
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3">Outlet 4</th>
		</tr>
		<tr>
			<td bgcolor="lightgrey"><div class="0">
	<!-- SWITCH4 -->
	 <button id = 'btnp4' class="btn4"><?php echo checkstate(27); ?></button>
	<!-- SWITCH4 -->
		</div>

<th>
<div>
<img src="try.png">
</div>
</th >
</td>
<td bgcolor="lightgrey" width = 150>
	Electrical Appliance #4
</td>
</tr>
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
		/**$("#btnp5").click(function(){		
		$.ajax({
			url:'on.php',
			method:'GET',
			data:{
				pin:17,18,22,27
				},
					success:function(data){
					document.getElementById("btnp5").innerHTML = data;
					window.location.reload();
				}
			});//ajax
			
		});//btn
		  **/
			
			
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
