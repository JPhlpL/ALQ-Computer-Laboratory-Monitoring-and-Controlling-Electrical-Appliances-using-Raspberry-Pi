<html>
<head>
<script>
     function myFunction(){
         var xr = new XMLHttpRequest();
         var url = "saveNewText.php";
         var text = document.getElementById("myDiv").innerHTML;
         var vars = "newText="+text;
         
         xr.open("POST", url, true);
         xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xr.send(vars);
     }
     function myFunction2(){
         var xr = new XMLHttpRequest();
         var url = "saveNewText2.php";
         var text = document.getElementById("myDiv2").innerHTML;
         var vars = "newText2="+text;
         
         xr.open("POST", url, true);
         xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xr.send(vars);
     }
	 function myFunction3(){
         var xr = new XMLHttpRequest();
         var url = "saveNewText3.php";
         var text = document.getElementById("myDiv3").innerHTML;
         var vars = "newText3="+text;
         
         xr.open("POST", url, true);
         xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xr.send(vars);
     }
	 function myFunction4(){
         var xr = new XMLHttpRequest();
         var url = "saveNewText4.php";
         var text = document.getElementById("myDiv4").innerHTML;
         var vars = "newText4="+text;
         
         xr.open("POST", url, true);
         xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xr.send(vars);
     }
	 
	 function myFunction5(){
         var xr = new XMLHttpRequest();
         var url = "saveNewText5.php";
         var text = document.getElementById("myDiv5").innerHTML;
         var vars = "newText5="+text;
         
         xr.open("POST", url, true);
         xr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xr.send(vars); 
     }
     
  </script>
	<link rel="stylesheet" type="text/css" href="buttondaw.css">
	<link rel="stylesheet" type="text/css" href="Navbar.css">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="Contain.css">
	<link rel="stylesheet" type="text/css" href="Cnt.css">
</head>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<link rel="icon" href="alq.png">
<title>Status</title>
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
  <a class="active" href="stats.php">Status</a>
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
	<th width= 100%, bgcolor="#fff" colspan="3">Outlet 1</th>
		</tr>
		<tr>
<th>
<div>
<img src="try.png">
</div>
</th>
</td>
<td bgcolor="lightgrey">Status: <div id="myDiv" contenteditable="true" onblur="myFunction()"> <?php include("myText.txt"); ?></td>
</tr>
<!-- OUTLET2 -->
<table border= solid 1px class="t2">
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3">Outlet 2</th>
		</tr>
		<tr>
<th>
<div>
<img src="try.png">
</div>
</th >
</td>
	<td bgcolor="lightgrey">Status: <div id="myDiv2" contenteditable="true" onblur="myFunction2()"> <?php include("myText2.txt"); ?></td>
</tr>
<!-- OUTLET3 -->
<table border= solid 1px position= center class="t3">
	<tr><th width= 100%, bgcolor="#fff" colspan="3">Outlet 3</th></tr>
	<tr>
<th>
<div>
<img src="try.png">
</div>
</th>
</td>
<td bgcolor="lightgrey">Status: <div id="myDiv3" contenteditable="true" onblur="myFunction3()"> <?php include("myText3.txt"); ?></td>

</tr>
<!-- OUTLET4 -->
<table border= solid 1px class="t4">
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3">Outlet 4</th>
		</tr>
		<tr>
<th>
<div>
<img src="try.png">
</div>
</th >
</td>
<td bgcolor="lightgrey">Status: <div id="myDiv4" contenteditable="true" onblur="myFunction4()"> <?php include("myText4.txt"); ?></td>
</tr>

<!-- OUTLET5 -->
<!--<table border= solid 1px>
	<tr>
	<th width= 100%, bgcolor="#fff" colspan="3">Outlet 5</th>
		</tr>
		<tr>
<th>
<div>
<img src="out.png">
</div>
</th >
</td>
<td bgcolor="lightgrey">Status: <div id="myDiv5" contenteditable="true" onblur="myFunction5()"> <?php include("myText5.txt"); ?></td>
</tr>
</table>
</div>-->

</body>
</html>
