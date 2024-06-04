<?php
$sql_lietke = "SELECT * FROM loai ORDER BY thutu DESC";
$result_lietke = mysqli_query($conn, $sql_lietke);
?>
<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Liệt kê danh mục sản phẩm</p>
<div style="padding-left:40px;">
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr style="text-align: center;background-color: gray;color:white;">
        <td style="border: 1px solid black;">ID danh mục</td>
        <td style="border: 1px solid black;">Tên danh mục</td>
        <td style="border: 1px solid black;">Thứ tự</td>
        <td style="border: 1px solid black;">Thao tác</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result_lietke)) {
        ?>
        <tr style="text-align: center;">
            <td>
                <?php echo $row['id_loai'] ?>
            </td>
            <td>
                <?php echo $row['ten'] ?>
            </td>
            <td>
                <?php echo $row['thutu'] ?>
            </td>
            <td>
                <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_loai'] ?>">Sửa</a> |
                <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_loai'] ?>">Xóa</a>

            </td>
        </tr>

        <?php
    }
    ?>
</table>
</div>