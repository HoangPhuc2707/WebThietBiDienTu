<?php
$sql_lietke_nguoidung = "SELECT * FROM user ORDER BY id_user DESC";
$result_lietke_nguoidung = mysqli_query($conn, $sql_lietke_nguoidung);
?>
<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Danh sách người dùng</p>
<table style="width: 100%;" border="1">
    <tr style="text-align: center;background-color: gray;color:white;">
        <th style="border: 1px solid black;">ID</th>
        <th style="border: 1px solid black;">Địa chỉ</th>
        <th style="border: 1px solid black;">Tài khoản</th>
        <th style="border: 1px solid black;">Tên người dùng</th>
        <th style="border: 1px solid black;">Số điện thoại</th>
        <th style="border: 1px solid black;">Thao tác</th>
        <th style="border: 1px solid black;">Chức vụ</th>



    </tr>
    <?php
    while ($row = mysqli_fetch_array($result_lietke_nguoidung)) {
        ?>

        <tr style="text-align: center;">
            <td>
                <?php echo $row['id_user'] ?>
            </td>
            <td>
                <?php echo $row['address'] ?>
            </td>
            <td>
                <?php echo $row['email'] ?>
            </td>
            <td>
                <?php echo $row['user'] ?>
            </td>
            <td>
                0<?php echo $row['sdt'] ?>
            </td>
            <!-- <td>
                <a href="?action=quanlynguoidung&query=sua&idnguoidung=
                <?php
                //  echo $row['id_user']
                  ?>
                  "> Sửa </a>
            </td> -->
            <td>
                <a href="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $row['id_user'] ?>">Xóa</a>
            </td>
            <td>
                <?php if ($row['role'] == 1) {
                    echo "Quản lý";
                } else {
                    echo "Khách hàng";
                } ?>
            </td>
        </tr>


        <?php
    }
    ?>
</table>