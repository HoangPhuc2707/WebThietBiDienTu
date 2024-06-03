<?php
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 10) - 10;
}
// GET id là lấy id từ bên MENU.php 
$sql_show = "SELECT * FROM sanpham,loai WHERE sanpham.id_loai=loai.id_loai ORDER BY sanpham.id_sp ASC LIMIT $begin,12";
$query_show = mysqli_query($conn, $sql_show);
?>
<div class="bg-content">
    <div class="onclick">
            <!-- <button onclick="topFunction()" id="myBtn" title="Lên đầu trang">Top</button> -->
            <button id="myBtn" onclick="topFunction()"> <i  class="fa fa-arrow-up"></i></button>
        </div>
    <div class="jsbanner">
        <div class="slide-show">
            <div class="list-images">
                <img class="img" src="images/banner4.webp" width="1200px" alt="">
                <img class="img" src="images/banner3.webp" width="1200px" alt="">
                <img class="img" src="images/banner2.webp" width="1200px" alt="">
                <img class="img" src="images/banner1.webp" width="1200px" alt="">
            </div>
            <div class="btns">
                <div class="jsleft leftjs">
                    <div class="btn-left btn"><</div>
                </div>
                <div class="jsright rightjs">
                    <div class="btn-right btn">></div>
                </div>
            </div>
        </div>
    </div>
        <div class="sanphamchungtoi">
            <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
            <div class="interface">
                <div></div>
                <img src="images/interface.svg" alt="">
                <div></div>
            </div>

        </div>
        <div class="sanpham">

            <?php
        $result = laySp($conn);
        while ($row = mysqli_fetch_array($query_show)) {
            $idsp = $row["id_sp"];
            $r = mysqli_fetch_array(LayTenLoai($conn, $idsp));
            ?>
            <div class="sp">
                <div class="sp-img">
                    <a href="index.php?url=chitietsp&id=<?php echo $r["id_sp"] ?>"><img
                            src="images/<?php echo $row["hinhanh"]; ?>"></a>
                </div>
                <div class="loai-tenloai">
                    <?php echo $r["ten"]; ?>
                </div>
                <div class="sp-tensp">
                    <a href="index.php?url=chitietsp&id=<?php echo $r["id_sp"] ?>">
                        <?php echo $row["tensp"]; ?>
                    </a>
                </div>
                <div class="gia">
                    <?php echo $row["gia"] . "0.000đ"; ?>
                </div>
            </div>
            <?php
        }
        ?>

        </div>
        <div class="phantrang">
            <div class="phantrang1">
                <?php
            $sql_trang = mysqli_query($conn, "SELECT * FROM sanpham");
            $row_count = mysqli_num_rows($sql_trang);
            $trang = ceil($row_count / 12);
            ?>
                <p>Trang hiện tại :
                    <?php echo $page ?>/
                    <?php echo $trang ?>
                </p>

                <ul class="list_trang">

                    <?php

                for ($i = 1; $i <= $trang; $i++) {
                    ?>
                    <li <?php if ($i == $page) {
                        echo 'style="background: brown;"';
                    } else {
                        echo '';
                    } ?>><a href="index.php?trang=<?php echo $i ?>">
                            <?php echo $i ?>
                        </a></li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>

    </div>