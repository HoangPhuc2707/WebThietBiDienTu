<div class="timkiem">
    <div class="top-timkiem">
        <a class="top-tk-main" href="index.php">Trang chủ</a>
        <p>/</p>
        <p class="kqtk">Kết quả tìm kiếm</p>
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
    require 'conn.php';
    if (isset($_GET['id_loai'])) {
        $id_loai = $_GET['id_loai'];
        $sql = "SELECT*FROM sanpham where id_loai=$id_loai";
        $kq = mysqli_query($conn, $sql);
        while ($d = mysqli_fetch_array($kq)) {
            $idsp = $d["id_sp"];
            $r = mysqli_fetch_array(LayTenLoai($conn, $idsp));
            ?>
            <div class="sp">
                <div class="sp-img">
                    <a href="index.php?url=chitietsp&id=<?php echo $d["id_sp"] ?>"><img
                            src="images/<?php echo $d["hinhanh"]; ?>"></a>
                </div>
                <div class="sp-tensp">
                    <a href="index.php?url=chitietsp&id=<?php echo $d["id_sp"] ?>">
                        <?php echo $d["tensp"]; ?>
                    </a>
                </div>
                <div class="gia">
                    <?php echo $d["gia"] . ".000đ"; ?>
                </div>
            </div>
            <?php
        }
        ?>
        <?php
    }
    ?>

</div>