<?php
require "../../pages/conn.php";
$id_user = $_POST['id_user'];
$address = $_POST['address'];
$email = $_POST['email'];
$user = $_POST['user'];
$sdt = $_POST['sdt'];
$role = $_POST['role'];

if (isset($_POST['suanguoidung'])) {
    // $sql_sua_nd = "UPDATE user SET id_user='" . $id_user . "',address='" . $address . "',email='" . $email . "',user='" . $user . "',role='" . $role . "',sdt='" . $sdt . "' WHERE id_user='$_GET[idnguoidung]'";
    // mysqli_query($conn, $sql_sua_nd);
    // header('Location:../../indexadmin.php?action=quanlynguoidung&query=them');
} else {
    $id = $_GET['idnguoidung'];
    $sql_xoa_nd = "DELETE FROM user WHERE id_user ='" . $id . "';";
    mysqli_query($conn, $sql_xoa_nd);
    header('Location:../../indexadmin.php?action=quanlynguoidung&query=them');
}
?>