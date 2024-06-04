<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Thêm sản phẩm</p>
<div style="padding-left:40px;">
<table style="width: 100%;" >
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">ID sản phẩm</td>
            <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">Danh mục sản phẩm</td>
        </tr>
        <tr>
            <td style="width: 540px;"><input type="text" name="masp" style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" placeholder="Nhập ID sản phẩm..."></td>
            <td style="width: 500px;">
                <select name="danhmuc" style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;">
                    <?php
                    $sql_danhmuc = "SELECT * FROM loai ORDER BY id_loai DESC";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                        ?>
                    <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                    <option value="<?php echo $row_danhmuc['id_loai'] ?>"><?php echo $row_danhmuc['ten'] ?></option>


                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;" >Tên sản phẩm</td>
        </tr>
        <tr>
            <td colspan="2" ><input style="width: 98%; height: 30px;border-radius:5px;border: 1px solid #c8c8c8;" type="text" name="tensanpham" placeholder="Nhập tên sản phẩm..."></td>
        </tr>
        <tr>
            <td style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;">Giá</td>
            <td style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;">Hình ảnh sản phẩm</td>
        </tr>
        <tr>
            <td><input style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;"  placeholder="Nhập giá sản phẩm..." type="number" name="giasp"></td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;">Mô tả</td>
        </tr>
        <tr>
            <td colspan="2" ><textarea style="width: 98%; height: 100px;" maxlength="500" name="motasp" placeholder="Nhập mô tả..."></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input style="border: 0;border-radius:5px;width: 200px; height: 40px; font-size:14px;background-color: rgb(112, 191, 255); margin-top:40px;margin-left:80%;" type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
        </tr>
    </form>
</table>
</div>



