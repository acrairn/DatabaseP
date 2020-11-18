<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'classicmodels';


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {
    die("connection fail" . mysqli_connect_error());
}else{
    echo "connected" ;
}
?>