<?php
require "../../pages/conn.php";
$id_loai = $_POST['id_loai'];
$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if (isset($_POST['themdanhmuc']) && $thutu != '' && $tendanhmuc != '' && $id_loai != '') {
    $sql_them = "INSERT INTO loai(id_loai,ten,thutu) VALUE('" . $id_loai . "','" . $tendanhmuc . "','" . $thutu . "'); ";
    mysqli_query($conn, $sql_them);
    header('Location:../../indexadmin.php?action=quanlydanhmucsanpham&query=them');
} elseif (isset($_POST['suadanhmuc'])) {
    $sql_sua = "UPDATE loai SET id_loai='" . $id_loai . "', ten='" . $tendanhmuc . "',thutu='" . $thutu . "' WHERE id_loai='$_GET[iddanhmuc]'";
    mysqli_query($conn, $sql_sua);
    header('Location:../../indexadmin.php?action=quanlydanhmucsanpham&query=them');
} else {
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM loai WHERE id_loai ='" . $id . "';";
    mysqli_query($conn, $sql_xoa);
    header('Location:../../indexadmin.php?action=quanlydanhmucsanpham&query=them');
}
?>