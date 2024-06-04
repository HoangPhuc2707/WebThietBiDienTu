<?php
if (session_status() == PHP_SESSION_NONE)
   session_start();
ob_start();
require "conn.php";
require "func.php";
if (isset($_SESSION["role"]) && $_SESSION["role"] == 1)
   header("location: ../indexadmin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../../logo/logomini.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="wrapper-lg">
        <div class="form-container">
            <form action="login.php" class="form-main" method="post">
                <div class="img-logout"><a href="../../index.php"><img src="../images/logout.png" alt=""></a></div>
                <h1 class="form-heading">ĐĂNG NHẬP</h1>
                <div class="form-content">
                    <div class="form-input">
                        <p><label for="taikhoan">Tài khoản</label>*</p>
                        <input type="email" name="email" placeholder="Email" value ="" required>
                    </div>
                    <div class="form-input">
                        <p><label for="psw">Mật khẩu</label>*</p>
                        <input type="password" placeholder="Mật khẩu" name="pass" value="" required>
                    </div>
                </div>
                <button type="submit" name="dangnhap" class="form-button">Đăng Nhập</button>
                <div class="dk">
                    <a href="../pages/signup.php">Đăng Ký</a></p>
                </div>
                <?php
            if (isset($_POST['dangnhap'])) {
               $e = $_POST['email'];
               $p = $_POST['pass'];
               if (!$user || !$pass)
                  echo '<p style="color:red;margin-top:5px;">Tài khoản hoặc mật khẩu sai, vui lòng nhập lại!</p>';
            }
            ?>
            </form>
        </div>
    </div>
    <?php
   if (isset($_POST["dangnhap"])) {
        $e = $_POST['email'];
        $p = $_POST['pass'];
        $u = $_POST['user'];
        $re = Login($conn, $e, $p);
        if (mysqli_num_rows($re) > 0) {
        //echo "thành công";
        $r = mysqli_fetch_array($re);
        $_SESSION["id_user"] = $r["id_user"];
        $_SESSION["email"] = $r["email"];
        $_SESSION["pass"] = $r["pass"];
        $_SESSION["role"] = $r["role"];
        $_SESSION["user"] = $r["user"];
        header("location:../indexadmin.php");
    } else {
       echo "thất bại";
    }
 }
   ?>
</body>

</html>