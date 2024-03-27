<?php
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
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/chitietsp.css">
    <link rel="stylesheet" href="css/timkiem.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            
        </div>
        <div class="footer">
            <?php
            require "pages/footer.php";
            ?>
        </div>

    </div>

</body>

</html>
