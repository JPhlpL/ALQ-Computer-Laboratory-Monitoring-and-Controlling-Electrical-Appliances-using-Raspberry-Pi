<?php
   ob_start();
   session_start();
    $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['pass'])) 
			{
               if ($_POST['pass'] == 'ojt') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['userLogin'] = true;
                  header("location: /Restricted/main2.php"); 
                  define("INCLUDING", true);
                  

               }else {
                  $msg = 'Wrong password';
               }
               
               if ($_POST['pass'] == 'admin') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['userLogin'] = true;
                  header("location: /Restricted/main.php"); 
                  define("INCLUDING", true);
                  

               }else {
                  $msg = 'Wrong password';
               }
            }
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
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
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" href="alq.png">
<link rel="stylesheet" type="text/css" href="bgind.css">
<title>ALQ WEB LOGIN</title>
<body>
      <div class = "container form-signin">
         
         <?php
           
         ?>
      </div> <!-- /container -->


<div class="logcute">
			<form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
			<?php echo $msg; ?></h4>
<img src="alq.png" class="tao" >
<h1>Login here</h1>
<p>Password</p>
<input type="password" name="pass" placeholder="Enter Password">
  <input type="submit" name="login" value="Login" onclick="">
<br>
<br> 
</div>


</body>
</head>
</html>
