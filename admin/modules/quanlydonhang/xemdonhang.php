<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Xem đơn hàng</p>
<?php
$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM giohang ,sanpham  WHERE giohang.id_sp=sanpham.id_sp
        AND giohang.id_dh=$code
        ORDER BY giohang.id_giohang DESC";
$result_lietke_dh = mysqli_query($conn, $sql_lietke_dh);
?>
<table style="width: 100%;border-collapse:collapse;" border="1">
    <tr style="text-align: center;background-color: gray;color: white;">
        <td style="border: 1px solid black;">ID đơn hàng</td>
        <td style="border: 1px solid black;">ID sản phẩm</td>
        <td style="border: 1px solid black;">Số lượng</td>
        <td style="border: 1px solid black;">Đơn giá</td>
        <td style="border: 1px solid black;">Tên sản phẩm</td>
        <td style="border: 1px solid black;">Hình ảnh</td>

    </tr>
    <?php


    while ($row = mysqli_fetch_array($result_lietke_dh)) {

        ?>
        <tr style="text-align: center;">
            <td>
                <?php echo $row['id_dh'] ?>
            </td>
            <td>
                <?php echo $row['id_sp'] ?>
            </td>
            <td>
                <?php echo $row['soluong'] ?>
            </td>
            <td>
                <?php echo $row['gia'] ?>0.000đ
            </td>
            <td>
                <?php echo $row['tensp'] ?>
            </td>
            <td style="width:150px;height:150px; ">
            <img style="width:150px;height:150px; "  src="../images/<?php echo $row['hinhanh'] ?>" >
            </td>
        </tr>
        <?php
    }
    ?>
    <tr>

    </tr>

</table>