<?php
require "../../pages/conn.php";
$tensanpham = $_POST['tensanpham'];
$motasanpham = $_POST['motasp'];
$masanpham = $_POST['masp'];
$giasanpham = $_POST['giasp'];
//xử lý hình anh
$file = $_FILES['hinhanh'];
$hinhanh = $file['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanhgio = time() . '_' . $hinhanh;
$danhmuc = $_POST['danhmuc'];

if (isset($_POST['themsanpham'])) {
    if (isset($_FILES['hinhanh'])) {
        if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png'|| $file['type'] == 'image/webp') {
            move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
            $sql_themsp = "INSERT INTO sanpham(tensp,id_sp,gia,hinhanh,id_loai,mota) 
                VALUE ('" . $tensanpham . "','" . $masanpham . "','" . $giasanpham . "','" . $hinhanh . "','" . $danhmuc . "','".$motasanpham."')";
            mysqli_query($conn, $sql_themsp);
            header('Location:../../indexadmin.php?action=quanlysanpham&query=them');
        } else {
            $hinhanh = '';
            header('Location:../../indexadmin.php?action=quanlysanpham&query=them');
        }
    }
} elseif (isset($_POST['suasanpham'])) {
    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql_sua = "UPDATE sanpham SET tensp='" . $tensanpham . "',id_sp='" . $masanpham . "',
            gia='" . $giasanpham . "',hinhanh='" . $hinhanh . "',
            id_loai='" . $danhmuc . "',mota='".$motasanpham."' WHERE id_sp='$_GET[idsanpham]'";

        $sql = "SELECT*FROM sanpham WHERE id_sp='$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhanh']);
        }

    } else {
        $sql_sua = "UPDATE sanpham SET tensp='" . $tensanpham . "',id_sp='" . $masanpham . "',
            gia='" . $giasanpham . "',id_loai='" . $danhmuc . "', mota='".$motasanpham."' WHERE id_sp='$_GET[idsanpham]'";
    }
    mysqli_query($conn, $sql_sua);
    header('Location:../../indexadmin.php?action=quanlysanpham&query=them');
} else {

    $id = $_GET['idsanpham'];
    $sql = "SELECT *FROM sanpham WHERE id_sp = '$id' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM sanpham WHERE id_sp ='" . $id . "';";
    mysqli_query($conn, $sql_xoa);
    header('Location:../../indexadmin.php?action=quanlysanpham&query=them');
}
?>