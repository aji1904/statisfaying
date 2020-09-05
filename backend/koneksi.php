<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "survei";

$koneksi = mysqli_connect($host,$username, $password, $database);

if(!$koneksi){
    mysqli_error();
}
?>