<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
require "pages/conn.php";
require "pages/func.php";
?>
<?php

if (!isset($_SESSION["role"]))
    header("location: pages/login.php");
else if ($_SESSION["role"] != 1)
    header("location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style_admincp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../logo/logomini.png">
    <title>Admin</title>
</head>

<body>
    <div class="all-admin">
        <div class="admin-top">
            <div class="admin-top-left">
                <h1 class="admin-title">Xin chào Admin</h1>
            </div>
            <div class="admin-top-right">
                <a href = 'pages/out.php'>
                    <div class="admin-logout">
                        <div>
                            <img id="logout-img" src="../images/icons8-logout-64.png" alt="">
                        </div>
                        <div><p>Đăng xuất</p></div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="admin-container">
            <div class="admin-content">
                <div class="left-admin">
                    <div class="left-menu">
                        <div class="left_menu">
                            <?php include("pages/conn.php");
                                include("modules/menu.php");
                            ?>
                        </div>
                    </div>
                </div>
                <div class= "right-admin">
                    <?php
                        include("modules/main.php");
                    ?>
                </div>
            </div>
            <div class="admin-footer">
            <?php
                include("modules/footer.php");
            ?>
            </div>
        </div>
        
</div>
</body>

</html>