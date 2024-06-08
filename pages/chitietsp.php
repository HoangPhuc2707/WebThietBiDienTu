<?php
$sql_Chitietsp = "SELECT * FROM loai,sanpham WHERE sanpham.id_loai=loai.id_loai AND sanpham.id_sp='$_GET[id]' limit 1";
$query_Chitietsp = mysqli_query($conn, $sql_Chitietsp);
while ($row_Chitietsp = mysqli_fetch_array($query_Chitietsp)) {
    ?>
<div class="timkiem">
    <div class="top-timkiem">
        <a class="top-tk-main" href="index.php">Trang chủ</a>
        <p>/</p><a class="top-tk-loai" href="index.php?url=theloai&id_loai=<?php echo $row_Chitietsp['id_loai'] ?>">
            <?php echo $row_Chitietsp["ten"]; ?>
        </a>
        <p>/</p>
        <p class="top-tk-tensp">
            <?php echo $row_Chitietsp["tensp"]; ?>
        </p>
    </div>
</div>
<div class="chitietsp">
    <div class="left-chitietsp">
        <img src="images/<?php echo $row_Chitietsp["hinhanh"]; ?>" alt="">
    </div>
    <div class="right-chitietsp">
        <form action="index.php?url=giohang" method="post">
            <div class="chitietsp-tensp">
                <h2><?php echo $row_Chitietsp["tensp"]; ?></h2>
            </div>
            <div class="chitietsp-idsp">
                #Mã sản phẩm: <?php echo $row_Chitietsp["id_sp"]; ?>
            </div>
            <div class="chitietsp-gia">
                <?php echo $row_Chitietsp["gia"] . "0.000đ"; ?>
            </div>
            <div class="right-bg-black">
                <div class="mota-sp">
                    <?php echo $row_Chitietsp["mota"]; ?>
                </div>
                <div class="themvaogio">
                    <input class="nut-themvaogio" type="submit" value="THÊM VÀO GIỎ" name="addtocart">
                </div>
                
            </div>

    </div>
    <input type="hidden" value="<?php echo $row_Chitietsp["id_sp"]; ?>" name="id_sp">
    <input type="hidden" value="<?php echo $row_Chitietsp["ten"]; ?>" name="ten">
    <input type="hidden" value="<?php echo $row_Chitietsp["tensp"]; ?>" name="tensp">
    <input type="hidden" value="<?php echo $row_Chitietsp["gia"]; ?>" name="gia">
    <input type="hidden" value="<?php echo $row_Chitietsp["hinhanh"]; ?>" name="hinhanh">
    </form>

</div>
<?php } ?>

