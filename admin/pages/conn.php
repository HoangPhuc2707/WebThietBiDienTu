<?php
$host="localhost";
$db="webtbdt2";
$user="root";
$pass="";
$conn = new mysqli($host,$user,$pass,$db);
if(!$conn)
    echo "ket noi loi";
if($conn->connect_error){
    die("kết nối không thành công:".$conn->connect_error);
}
?>