<?php
//kiểm tra có phải admin login
function Login($kn,$email,$pass){
    $sql="SELECT * FROM user WHERE email='$email' AND pass='$pass'";
    return mysqli_query($kn,$sql);
}
?>