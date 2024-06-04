<?php
    if (session_status() == PHP_SESSION_NONE)
    session_start();
    include 'conn.php';
    //TĂNG SỐ LUONG
    if(isset($_GET['cong'])){
        $i = 0;
        foreach ($_SESSION['giohang'] as $item){
        $cong=$_GET['cong'];
        if ($item[0] === $_GET['cong']) {
            $slnew = 1 + $item[5];
            $_SESSION['giohang'][$i][5] = $slnew;
            header('Location:index.php?url=giohang');
            $tam = 1;
            break;
        }
        $i++;
    }
}
if(isset($_GET['tru'])){
    $i = 0;
    foreach ($_SESSION['giohang'] as $item){
    $cong=$_GET['tru'];
    if ($item[0] === $_GET['tru'] && $item[5]>1) {
        $slnew = $item[5]-1;
        $_SESSION['giohang'][$i][5] = $slnew;
        header('Location:index.php?url=giohang');
        $tam = 1;
        break;
    }
    $i++;  
}
}
if(isset($_GET['tru'])){
    $i = 0;
    foreach ($_SESSION['giohang'] as $item){
    $cong=$_GET['tru'];
    if ($item[0] === $_GET['tru'] && $item[5]<=1) {
        
            header('Location:index.php?url=giohang');
            break;
    }
    $i++;  
}
}
?>