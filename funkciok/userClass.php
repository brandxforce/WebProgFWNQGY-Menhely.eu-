<?php
require_once('config.php');
class userClass
{
public function userLogin($username,$password)
{
try{
$db = getDB();
$hash_password= hash('sha256', $password);
$stmt = $db->prepare("SELECT id FROM menhely_users WHERE (username=:username) AND password=:hash_password");
$stmt->bindParam("username", $username,PDO::PARAM_STR) ;
$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
$stmt->execute();
$count=$stmt->rowCount();
$data=$stmt->fetch(PDO::FETCH_OBJ);
$db = null;
if($count)
{
$_SESSION['uid']=$data->id;
return true;
}
else
{
return false;
}
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}
public function userRegistration($username,$csaladinev,$utonev,$password,$email)
{
try{
$db = getDB();
$st = $db->prepare("SELECT id FROM menhely_users WHERE username=:username");
$st->bindParam("username", $username,PDO::PARAM_STR);
$st->execute();
$count=$st->rowCount();
if($count<1)
{
$stmt = $db->prepare("INSERT INTO menhely_users(id,username,csaladinev,utonev,password,email,role) VALUES ('',:username,:csaladinev,:utonev,:hash_password,:email,'')");
$stmt->bindParam("username", $username,PDO::PARAM_STR) ;
$hash_password= hash('sha256', $password);
$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
$stmt->bindParam("email", $email,PDO::PARAM_STR) ;
$stmt->bindParam("csaladinev", $csaladinev,PDO::PARAM_STR);
$stmt->bindParam("utonev", $utonev,PDO::PARAM_STR);
$stmt->execute();
$uid=$db->lastInsertId();
$db = null;
return true;
}
else
{
$db = null;
return false;
}

}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}
public function userDetails($uid)
{
try{
$db = getDB();
$stmt = $db->prepare("SELECT email,username,csaladinev,utonev FROM menhely_users WHERE id=:uid");
$stmt->bindParam("uid", $uid,PDO::PARAM_INT);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_OBJ);
return $data;
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}
}
?>