<?php
require 'conn.php';
if (isset($_POST['dangky'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    if (!empty($user) && !empty($pass) && !empty($sdt) && !empty($email) && !empty($diachi)) {
        if ($repass == $pass){
        print_r($_POST);
        echo "</br>";
        $sql = "INSERT INTO `user`(`address`,`email`,`user`,`pass`,`sdt`) 
        VALUE('$diachi','$email','$user','$pass','$sdt')";
        if ($conn->query($sql) === TRUE) {
            header("location: login.php");
        } else {
            echo "Lỗi{$sql}" . $conn->error;
        }}
        if ($repass != $pass){
            echo '<p style="color:red;margin-top:5px;">Mật khẩu không trùng khớp</p>';
        }
    } else {
        echo "ban can nhap du thong tin";
    }
}
?>