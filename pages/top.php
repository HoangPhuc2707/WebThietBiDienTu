<?php
require 'conn.php';
?>
<div class="top">
    <div class="top-menu">
        <a class="logo" href="index.php"><img src="images/logo1.png" alt=""></a>
        <div class="search-user-buy">
            <div class="search">
                <Form id="form-search" method="POST" action="index.php?url=timkiem">
                    <input id="input-tksp" type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                    <button id="input-search" type="submit" name="timkiem"><img src="images/icons8-search-50.png"
                            alt="Search">
                    </button>
                </Form>
            </div>
            <div class="user">
                <?php
         if (isset($_SESSION['email']) && ($_SESSION['email'] != "")) {
            echo '<div class="icon-user">
            <div class="img-user"><img src="images/icons8-user-30.png" alt=""></div>
            <div><p><a class="dndk" href="">' . $_SESSION['user'] . '</a></p></div>
            <div class="down-user">
                <div class="logout"><img class="img-logout" src="images/icons8-logout-50.png" alt="">
                <a class="dndk" href="admin/pages/out.php">Đăng xuất</a></div>
            </div>
        </div>';
         } else {
            ?>
                <div class="img-user"><img src="images/icons8-user-30.png" alt=""></div>
                <p class="login"><a class="dndk" href="admin/pages/login.php">ĐĂNG NHẬP</a></p>
                <?php
         }
         ?>
            </div>
            <a title="Giỏ hàng" href="index.php?url=giohang">
                <div class="buy">
                    <div><img src="images/icons8-cart-64.png" alt=""></div>
                    <div class="buy-text">GIỎ HÀNG</div>
                </div>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <ul class="main_menu">
            <li><a href="index.php">Trang chủ</a></li>
            <?php
            $sql = "SELECT*FROM loai";
            $kq = mysqli_query($conn, $sql);
            while ($d = mysqli_fetch_array($kq)) {
               ?>
               <li><a href="index.php?url=theloai&id_loai=<?php echo $d['id_loai']; ?>">
                     <?php echo $d['ten']; ?>
                  </a></li>
            <?php } ?>

    </div>
</div>