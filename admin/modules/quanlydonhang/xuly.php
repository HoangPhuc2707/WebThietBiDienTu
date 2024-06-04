<?php
include "../../pages/conn.php";
if (isset($_GET['iddonhang'])) {
    $id = $_GET['iddonhang'];
    $sql_delete = "DELETE FROM donhang WHERE  id_dh='$id'";
    mysqli_query($conn, $sql_delete);
    $sql_delete_giohang = "DELETE FROM giohang WHERE  id_dh='$id'";
    mysqli_query($conn, $sql_delete_giohang);
    header('Location:../../indexadmin.php?action=quanlydonhang&query=them');
}
if(isset($_GET['code'])){
    $code_cart=$_GET['code'];
    $sql_update="UPDATE donhang set duyetdh=0 where id_dh='".$code_cart."'";
    $sql=mysqli_query($conn,$sql_update);
    header('Location:../../indexadmin.php?action=quanlydonhang&query=them');
}
?>