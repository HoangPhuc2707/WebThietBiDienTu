<?php
require 'conn.php';
?>
<div class="main-menu">
   <a><label title="Menu" class="icon-menu" for="nut-menu"><img id="icon-menu" src="images/icon-menu.png"
            alt=""></label></a>
   <a class="logo" href="index.php"><img src="images/logo.jpg" alt=""></a>
   <div class="search-buy">
      <div>
      <Form id="form-menu" method="POST" action="index.php?url=timkiem">
         <input id="input-tksp" type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
         <input id="search" type="submit" name="timkiem" value="Tìm kiếm">
      </Form>
      </div>
      <div class="user">
         <a href=""><img src="images/icons8-user-24.png" alt=""></a><br>
         <?php
         if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
            echo '<p><a class="dndk" href="">' . $_SESSION['user'] . '</a>/<a class="dndk" href="">Đăng xuất</a></p>';
         } else {
            ?>
            <p><a class="dndk" href="">Đăng nhập</a>/<a class="dndk"
                  href="">Đăng ký</a></p>
            <?php
         }
         ?>
      </div>
      <a class="buy" title="Giỏ hàng" href="index.php?url=giohang"><img src="images/icon-buy.png" alt=""></a>
   </div>
</div>
<div class="down-menu">
   <div class="down_menu">
      <input type="checkbox" id="nut-menu">
      <div class="sidebar">
         <ul class="menu-list">
            <label for="nut-menu"><img id="icon-x" src="images/icon-x.png" alt=""></label>
            <?php
            $sql = "SELECT*FROM loai";
            $kq = mysqli_query($conn, $sql);
            while ($d = mysqli_fetch_array($kq)) {
               ?>
               <li><a href="index.php?url=theloai&id_loai=<?php echo $d['id_loai']; ?>">
                     <?php echo $d['ten']; ?>
                  </a></li>
            <?php } ?>
            
            
         </ul>
      </div>
   </div>
</div>