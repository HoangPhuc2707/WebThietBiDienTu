<?php
$sql_sua_sp = "SELECT * FROM sanpham WHERE id_sp='$_GET[idsanpham]' LIMIT 1";
$result_sua_sp = mysqli_query($conn, $sql_sua_sp);
?>
<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Sửa sản phẩm</p>
<div style="display:flex;padding-left:40px;">
    <table width="100%">
        <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>"
            enctype="multipart/form-data">
        <?php
    while ($row = mysqli_fetch_array($result_sua_sp)) {
        ?>
        <div >
            <img src="../images/<?php echo $row['hinhanh'] ?> " width="300px"><br>
            <input style="padding-top: 10px;" type="file" name="hinhanh">       
        </div>
        <div style="padding-left:40px;">
            <tr>
                <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">ID sản phẩm</td>
                <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">Danh mục sản phẩm</td>
            </tr>
            <tr>
                <td style="width: 400px;"><input style="width: 350px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" type="text" name="masp" value="<?php echo $row['id_sp'] ?>"></td>
                <td style="width: 400px;">
                <select name="danhmuc" style="width: 340px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;">
                    <?php
                    $sql_danhmuc = "SELECT * FROM loai ORDER BY id_loai DESC";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        if ($row_danhmuc['id_loai'] == $row['id_loai']) {
                            ?>
                            <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                            <option value="<?php echo $row_danhmuc['id_loai'] ?>" selected><?php echo $row_danhmuc['ten'] ?></option>
                            <?php
                        } else {

                            ?>
                            <option value="<?php echo $row_danhmuc['id_loai'] ?>"><?php echo $row_danhmuc['ten'] ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
                </td>
            </tr>
            <tr>
                <td style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;" >Tên sản phẩm</td>
                <td style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;">Giá</td>
            </tr>
            <tr>
                <td><input style="width: 350px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" type="text" value="<?php echo $row['tensp'] ?>" name="tensanpham"></td>
                <td><input style="width: 335px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" type="number" name="giasp" value="<?php echo $row['gia'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;" >Mô tả</td>
            </tr>
            <tr>
                <td colspan="2"><textarea style="width: 96%; height: 150px;" maxlength="500" name="motasp"><?php echo $row['mota'] ?></textarea></td>
            </tr>
            <tr>
                <td style="padding-top: 40px;" colspan="2"><input style="border: 0;border-radius:5px;width: 200px; height: 40px; font-size:14px;background-color: rgb(112, 191, 255);margin-left:500px; " type="submit" value="Sửa sản phẩm" name="suasanpham"></td>
            </tr>
        </div>
        </form>
        <?php
        }
        ?>
    </table>
</div>


