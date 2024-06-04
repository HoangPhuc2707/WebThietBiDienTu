<div class="timkiem">
    <div class="top-timkiem">
        <a class="top-tk-main" href="index.php">Trang chủ</a>
        <p>/</p>
        <p class="kqtk">Kết quả tìm kiếm</p>
    </div>
</div>
<div class="khoangkhongvodinh"></div>
<div class="sanphamchungtoi">
    
    <h2>KẾT QUẢ TÌM KIẾM PHÙ HỢP</h2>
    <div class="interface">
        <div></div>
        <img src="images/interface.svg" alt="">
        <div></div>
    </div>
</div>
<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
}
$sql_show = "SELECT * FROM sanpham,loai WHERE  sanpham.id_loai=loai.id_loai AND sanpham.tensp LIKE '%" . $tukhoa . "%'";
$query_show = mysqli_query($conn, $sql_show);

?>
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
                <p><?php echo $r["ten"]; ?></p>
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