<?php
$sname = "localhost";
$uname = "root";
$password = "";
$dbname = "php_task";

$connect = mysqli_connect($sname, $uname, $password, $dbname);
if(!$connect){
    echo "Connection Failed!";
}
?>