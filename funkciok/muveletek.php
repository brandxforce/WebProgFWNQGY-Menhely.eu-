<?php
require_once("config.php");
require_once('userClass.php');
$userClass = new userClass();

$errorMsgReg='';
$errorMsgLogin='';
if (isset($_POST['signupSubmit']))
{
	$username=$_POST['username'];
	$csaladinev=$_POST['csaladinev'];
	$utonev=$_POST['utonev'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$repassword=$_POST['confirm_password'];
	if($password==$repassword){
		if(strlen($username) > 6 && strlen($username) < 12)
		{
			if(filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$uid=$userClass->userRegistration($username,$csaladinev,$utonev,$password,$email);
				if($uid)
				{
					header("Location: $webad");
				}
				else
				{
					header("Location: $webad/regisztracio.php?error=4");
				}
			}
			else
			{
				header("Location: $webad/regisztracio.php?error=3");
			}
		}else{
			header("Location: $webad/regisztracio.php?error=2");
		}
	}else{
		header("Location: $webad/regisztracio.php?error=1");
	}
}else{
	echo 'Üres kérés!';
}
?>