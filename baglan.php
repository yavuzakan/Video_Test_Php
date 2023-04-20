<?php 

$hostName = "localhost";
$dbName = "egitim";
$userName = "root";
$password = "123456789";
try {


    $db = new PDO("mysql:host=$hostName;dbname=$dbName",$userName,$password);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }
    catch(PDOException $e)
    {
     echo "Connection failed: " . $e->getMessage();
    }


 ?>
