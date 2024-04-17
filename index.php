<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
// khởi tạo giỏ hàng rỗng
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
require "conn.php";
require "pages/func.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/timkiem.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/chitietsp.css">
    <link rel="stylesheet" href="css/giohang.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="logo/logomini.png">
    <title>Thiết bị điện tử</title>

</head>

<body>
    <div class="container">
        <div class="header">
            <?php
            require "pages/top.php";
            ?>
        </div>
        <div class="content">
            <?php
            if (isset($_GET["url"])) {
                $page = $_GET["url"];
                $path = "pages/" . $page . ".php";
                require $path;
            } else
                require "pages/content.php";
            ?>
            <!-- lấy dữ liệu từ form để lưu vào giỏ -->
            <?php
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id_sp = $_POST['id_sp'];
                $ten = $_POST['ten'];
                $tensp = $_POST['tensp'];
                $hinhanh = $_POST['hinhanh'];
                $gia = $_POST['gia'];
                $sl = 1;
                //biến tạm
                $tam = 0;
                // kiểm tra sản phẩm có tồn tại trong giỏ hàng hay không
                //nếu có chỉ cập nhật lại số lượng
                $i = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    if ($item[2] === $tensp) {
                        $slnew = $sl + $item[5];
                        $_SESSION['giohang'][$i][5] = $slnew;
                        $tam = 1;
                        break;
                    }
                    $i++;
                }
                //còn ngược lại add mới sản phẩm vào giỏ hàng
                // khởi tạo 1 mảng con trước khi đưa vào giỏ
                if ($tam == 0) {
                    $item = array($id_sp, $ten, $tensp, $hinhanh, $gia, $sl);
                    $_SESSION['giohang'][] = $item;
                }//Sử dụng phương thức window.location.href để chuyển hướng trang web đến URL 
                echo "<script>window.location.href=' index.php?url=giohang' </script>";
            }
            ?>
        </div>
        <div class="footer">
            <?php
            require "pages/footer.php";
            ?>
        </div>

    </div>

</body>
<script type="text/javascript" src="js/modal.js"></script>

</html>