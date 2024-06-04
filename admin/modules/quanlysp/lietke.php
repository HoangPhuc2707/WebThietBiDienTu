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
$sql_lietke_sp = "SELECT * FROM sanpham ,loai WHERE sanpham.id_loai=loai.id_loai ORDER BY id_sp ASC LIMIT $begin,12";
$result_lietke_sp = mysqli_query($conn, $sql_lietke_sp);
?>
<div class="top-ds-sp" style="display:flex;">
    <div class="ds-sp-left" style="width: 80%;height: auto;">
        <p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Danh sách sản phẩm</p>
    </div>
    <div class="ds-sp-right" style="width: 20%;height: auto;">
        <a href="?action=quanlysanpham&query=them-sp">
            <div class="add-sp"
                style="width: 150px;height: 40px;text-align: center;background-color: black;color:white;border-radius:10px;">
                <p style="padding-top:10px;">Thêm sản phẩm</p>
            </div>
        </a>
    </div>
</div>
<div >
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr  style="text-align: center;background-color: gray;color:white;">
        <td>STT</td>
        <td>Tên sản phẩm</td>
        <td>Hình ảnh </td>
        <td>Giá sản phẩm</td>
        <td>Tên loại</td>
        <td>ID loại</td>
        <td>Thao tác</td>
    </tr>
    <?php
   $i = 0;
   while ($row = mysqli_fetch_array($result_lietke_sp)) {
      $i++;

      ?>
    <tr style="text-align: center;width:80px;height:150px;">
        <td>
            <?php echo $i ?>
        </td>
        <td style="text-align: center;">
            <?php echo $row['tensp'] ?>
        </td>
        <td style="width:150px;height:150px;">
            <img src="../images/<?php echo $row['hinhanh'] ?> " width="100%">
        </td>

        <td style="width:150px;text-align: center;">
            <?php echo $row['gia'] . '0.000đ' ?>
        </td>
        <td style="width:150px;text-align: center;">
            <?php echo $row['ten'] ?>
        </td>
        <td>
            <?php echo $row['id_loai'] ?>
        </td>
        <td>
            <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sp'] ?>">Sửa</a> |
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sp'] ?>">Xóa</a>

        </td>
    </tr>

    <?php
   }
   ?>
</table>
</div>
<div class="phantrangsp">
    <div class="phantrang2">
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
                        echo 'style="background: rgb(15, 22, 218);"';
                    } else {
                        echo '';
                     } ?>><a href="indexadmin.php?trang=<?php echo $i ?>">
                    <?php echo $i ?>
                </a></li>
            <?php
         }
         ?>
        </ul>
    </div>
</div>