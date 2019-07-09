<html>
<head>
	<link rel="stylesheet" type="text/css" href="buttondaw.css">
	<link rel="stylesheet" type="text/css" href="m.css">
	<link rel="stylesheet" type="text/css" href="Navbar.css">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="Contain.css">
	<link rel="stylesheet" type="text/css" href="Cnt.css">
</head>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<link rel="icon" href="alq.png">
<title>Current and Electric Consumption</title>
<?php
                 if (isset($_POST['on1'])){
                echo shell_exec("python /var/www/html/ledon1.py");
                 }
                 if (isset($_POST['off1'])){
                echo shell_exec("python /var/www/html/ledoff1.py");
                 }

		if (isset($_POST['on2'])){
                echo shell_exec("python /var/www/html/ledon2.py");
                 }
                 if (isset($_POST['off2'])){
                echo shell_exec("python /var/www/html/ledoff2.py");
                 }

		if (isset($_POST['on3'])){
                echo shell_exec("python /var/www/html/ledon3.py");
                 }
                 if (isset($_POST['off3'])){
                echo shell_exec("python /var/www/html/ledoff3.py");
                 }
		 
		 if (isset($_POST['on4'])){
                echo shell_exec("python /var/www/html/ledon4.py");
                 }
                 if (isset($_POST['off4'])){
                echo shell_exec("python /var/www/html/ledoff4.py");
                 }
		 
		 if (isset($_POST['on5'])){
                echo shell_exec("python /var/www/html/ledon5.py");
                 }
                 if (isset($_POST['off5'])){
                echo shell_exec("python /var/www/html/ledoff5.py");
                 }
?>
<body class="cont">
<div class="navbar">
  <div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
  <a href="main.php">Switch</a>
   <!--<a href="timer.php">Timer</a>-->
  <a href="stats.php">Status</a>
  <a class="active" href="cec.php">Current and Electric Consumption</a>
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
	<th width= 100%, bgcolor="#fff" colspan="3">Energy Meter</th>
		</tr>
		<tr>
			
<th>
<div>
<img src="try.png"><img src="try.png">
<br><img src="try.png"><img src="try.png">
</div>
</th>
</td>
<td bgcolor="#383838"><div class="0"><div class="meter"><?php echo file_get_contents( "index.txt" ); ?></div>
</div>
</tr>

</div>
<table border= solid 1px>
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3"></th>
		</tr>
</body>
</html>


<?php 
header('refresh:2');

?>
