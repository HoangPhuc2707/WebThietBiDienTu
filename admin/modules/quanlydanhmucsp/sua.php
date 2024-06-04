<?php
$sql_sua = "SELECT * FROM loai WHERE id_loai='$_GET[iddanhmuc]' LIMIT 1";
$result_sua = mysqli_query($conn, $sql_sua);
?>
<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Sửa danh mục sản phẩm</p>
<div style="padding-left:40px;">
    <table style="width: 100%;">
        <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
            <?php
            while ($dong = mysqli_fetch_array($result_sua)) {
            ?>
            <tr>
                <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">ID danh mục</td>
                <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">Tên danh mục</td>
            </tr>
            <tr>
                <td style="width: 540px;"><input
                        style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" type="text"
                        name="id_loai" value="<?php echo $dong['id_loai'] ?>"></td>
                <td style="width: 540px;"><input
                        style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" type="text"
                        name="tendanhmuc" value="<?php echo $dong['ten'] ?>">
                </td>
            </tr>
            <tr>
                <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">Thứ tự</td>
            </tr>
            <tr>
                <td style="width: 540px;"><input
                        style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" type="text"
                        name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
            </tr>
            <tr>
                <td style="padding-top: 40px;" colspan="2"><input style="border: 0;border-radius:5px;width: 200px; height: 40px; font-size:14px;background-color: rgb(112, 191, 255);margin-left:78%; " type="submit" value="Sửa danh mục sản phẩm" name="suadanhmuc"></td>
            </tr>
            <?php
            }
            ?>
        </form>
    </table>
</div>