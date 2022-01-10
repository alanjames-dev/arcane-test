<?php 

$sName = "localhost";
$uName = "id15200193_arcane_root";
$pass = "A$0c1ety4dm1n$%#";
$db_name = "id15200193_users";

$db = new mysqli($sName, $uName, $pass, $db_name);

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}

?>