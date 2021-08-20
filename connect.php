<?php
include('pass.php');
$host = "localhost:3306";
$user= "root";
$dbname = "WhiskyLog";

$conn = mysqli_connect($host, $user, $pass, $dbname) or die("Cant reach");

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}else{
//    echo "Connection succsessfull! \n";
}

$conn->set_charset("utf-8");
