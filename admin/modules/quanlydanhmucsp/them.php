<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Thêm danh mục sản phẩm</p>
<div style="padding-left:40px;">
    <table style="width: 100%;">
        <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
            <tr>
                <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">ID Danh mục</td>
                <td style="font-size:16px;font-weight:bold;padding-bottom: 5px;">Tên danh mục</td>
            </tr>
            <tr>
                <td style="width: 540px;"><input type="text" name="id_loai" style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" placeholder="Nhập ID danh mục..."></td>
                <td style="width: 540px;"><input type="text" name="tendanhmuc" style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" placeholder="Nhập tên danh mục..."></td>
            </tr>
            <tr>
                <td style="font-size:16px;font-weight:bold;padding-bottom:5px;padding-top:10px;">Thứ tự</td>
            </tr>
            <tr>
                <td style="width: 540px;"><input type="text" name="thutu" style="width: 500px; height: 30px; border-radius:5px;border: 1px solid #c8c8c8;" placeholder="Nhập thứ tự danh mục..."></td>
            </tr>
            <tr>
                <td colspan="2"><input style="border: 0;border-radius:5px;width: 200px; height: 40px; font-size:14px;background-color: rgb(112, 191, 255); margin-top:40px;margin-left:80%;" type="submit" value="Thêm danh mục" name="themdanhmuc"></td>
            </tr>
        </form>
    </table>
</div>