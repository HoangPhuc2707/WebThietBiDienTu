<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
require '../conn.php';
require "func.php";
?>

<?php
if (isset($_POST['thanhtoan'])) {


    //add dữ liệu vào đơn hàng
    $tongdh = $_POST['tongdh'];

    $address = $_POST['address'];

    $sdt = $_POST['sdt'];
    $phuongthucthanhtoan = $_POST['phuongthucthanhtoan'];
    $madh = "QPQ" . rand(0, 999999);
    $id_user = $_SESSION['id_user'];
    $sql = "INSERT INTO `donhang`(`madh`,`tongdh`,`phuongthucthanhtoan`,`id_user`,`address`,`sdt`,`duyetdh`) 
        VALUE('$madh','$tongdh','$phuongthucthanhtoan','$id_user','$address','$sdt',1)";

    if ($conn->query($sql) === TRUE) {
        //add dữ liệu vào giỏ hàng
        $sql_iddh = "SELECT id_dh FROM `donhang` ORDER BY id_dh DESC LIMIT 1;";
        $data = $conn->query($sql_iddh);
        $id_dh = mysqli_fetch_array($data);
        foreach ($_SESSION["danhsachsanpham"] as $id => $sl) {
            $sql_sp = "SELECT tensp,hinhanh,gia FROM `sanpham` WHERE id_sp=$id;";
            $data1 = $conn->query($sql_sp);
            $sp = mysqli_fetch_array($data1);
            $sql = "INSERT INTO `giohang`(`id_dh`,`id_sp`,`soluong`,`dongia`,`tensp`,`hinhanh`) 
            VALUE('$id_dh[0]','$id','$sl','$sp[gia]','$sp[tensp]','$sp[hinhanh]')";
            $conn->query($sql);
        }
        unset($_SESSION['giohang']);
        header('location: ../index.php');
    }
} else {
    echo '<p style="color:red;margin-top:5px;">Bạn cần đăng nhập!</p>';
}
?>