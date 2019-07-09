<?php

$minInterval = 1 * 60; // 5 minutes
$access = true;

if (file_exists('visitor')) {
    $visitor = unserialize(file_get_contents('visitor'));

    if ($visitor['addr'] != $_SERVER['REMOTE_ADDR']) {
        if ($visitor['time'] + $minInterval >= time()) {
            $access = false;
        }
    }
}

if (!$access) {
    exit('One device at a time only.');
} else {
    // Update last visitor data
    file_put_contents('visitor', serialize([
        'addr' => $_SERVER['REMOTE_ADDR'],
        'time' => time()
    ]));
}
?>



























<?php
	error_reporting(E_ALL);
	ob_start();
	session_start();
?>
<?php

$minInterval = 1 * 60; // 5 minutes
$access = true;

if (file_exists('visitor')) {
    $visitor = unserialize(file_get_contents('visitor'));

    if ($visitor['addr'] != $_SERVER['REMOTE_ADDR']) {
        if ($visitor['time'] + $minInterval >= time()) {
            $access = false;
        }
    }
}

if (!$access) {
    exit('One device at a time only.');
} else {
    // Update last visitor data
    file_put_contents('visitor', serialize([
        'addr' => $_SERVER['REMOTE_ADDR'],
        'time' => time()
    ]));
}
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
<?php
                 if (isset($_POST['30mins'])){
                echo shell_exec("python /var/www/html/30mins.py");
                 }
                 if (isset($_POST['1hr'])){
                echo shell_exec("python /var/www/html/1hr.py");
                 }
                 if (isset($_POST['2hr'])){
                echo shell_exec("python /var/www/html/2hr.py");
                 }

?>
<title>Timer</title>
<body class="cont">
<div class="navbar">
  <div class="dropdown">
  <button class="dropbtn" id="cute1">Menu</button>
  <div class="dropdown-content">
   <a class="active" href="main.php">Switch</a>
  <a href="stats.php">Status</a>
  <!---<a class="active" href="timer.php">Timer</a>-->
  <a href="cec.php">Current and Electric Consumption</a>
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
	<th width= 100%, bgcolor="#fff" colspan="3">Timer</th>
		</tr>
		<tr>
			<td bgcolor="lightgrey"><div class="0">
	<!-- SWITCH1 -->
	<button name="30mins" > 30 mins</button>  
	<!-- SWITCH1 -->
	</div>
<th>
<div>
<img src="try.png">
</div>
</th>
</td>
<td bgcolor="lightgrey" width = 150>
	30 mins timer
</td>
</tr>
<!-- OUTLET2 -->
<table border= solid 1px class="t2">
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3"></th>
		</tr>
		<tr>
			<td bgcolor="lightgrey"><div class="0">
	<!-- SWITCH2 -->
	 <button name="1hr" > 1 hour </button>  
	<!-- SWITCH2 -->
		</div>
<th>
<div>
<img src="try.png">
</div>
</th >
</td>
<td bgcolor="lightgrey" width = 150>
	1 hour timer
</td>
</tr>
<!-- OUTLET3 -->
<table border= solid 1px position= center class="t3">
	<tr><th width= 100%, bgcolor="#fff" colspan="3">Outlet 3</th></tr>
	<tr>
		<td bgcolor="lightgrey"><div class="0">
	<!-- SWITCH3 -->
	 <button name="2hr" > 2 hours </button>  
	<!-- SWITCH3 -->
</div>
<th>
<div>
<img src="try.png">
</div>
</th>
</td>
<td bgcolor="lightgrey" width = 150>
	2 hours timer
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
