<?php
require_once("config.php");
require_once('userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
if (isset($_POST['loginSubmit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(strlen(trim($username))>1 && strlen(trim($password))>1 )
	{
		$uid=$userClass->userLogin($username,$password);
		if($uid)
		{
		header("Location: $webad");
		}
		else
		{
		header("Location: $webad?oldal=hirek&error=3");
		}
	}
}else{
	echo "Üres kérés!";
}
?>