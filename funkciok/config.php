<?php
session_start();
$webad="http://".$_SERVER['SERVER_NAME']."/";
$servername = "mysql.omega:3306";
$username = "fwnqgy";
$password = "Efc678fc04";
try {
    $conn = new PDO("mysql:host=$servername;dbname=fwnqgy;charset=utf8", $username, $password);
    $conn2 = new PDO("mysql:host=$servername;dbname=fwnqgy;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
function getDB()
{
$servername = "mysql.omega:3306";
$username = "fwnqgy";
$password = "Efc678fc04";
try {
$dbConnection = new PDO("mysql:host=$servername;dbname=fwnqgy;charset=utf8", $username, $password);
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
}
?>