<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
//xóa giỏ hàng
if (isset($_GET['i']) && ($_GET['i'] >= 0)) {
    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) >= 0))
        array_splice($_SESSION['giohang'], $_GET['i'], 1);
} else {
    if (isset($_SESSION['giohang']))
        unset($_SESSION['giohang']);
}

if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
    header('location: index.php?url=giohang');
} else {
    header('location: index.php');
}
?>