<?php
$sql_lietke_dh = "SELECT * FROM donhang ,user  WHERE donhang.id_user=user.id_user ORDER BY id_dh DESC";
$result_lietke_dh = mysqli_query($conn, $sql_lietke_dh);
$sql_lietke_gh = "SELECT * FROM donhang ORDER BY id_dh DESC";
$result_lietke_gh = mysqli_query($conn, $sql_lietke_gh);
?>
<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Danh sách đơn hàng của người dùng</p>
<table style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr style="text-align: center;background-color: gray;color:white;">
        <td style="border: 1px solid black;">ID</td>
        <td style="border: 1px solid black;">Mã đơn hàng</td>
        <td style="border: 1px solid black;">Tổng thanh toán</td>
        <td style="border: 1px solid black;">Hình thức thanh toán</td>
        <td style="border: 1px solid black;">Tài khoản</td>
        <td style="border: 1px solid black;">Địa chỉ giao hàng</td>
        <td style="border: 1px solid black;">Email</td>
        <td style="border: 1px solid black;">Tình trạng</td>
        <td style="border: 1px solid black;">Số điện thoại</td>
        <td colspan="2" style="border: 1px solid black;">Thao tác</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result_lietke_dh) and $r = mysqli_fetch_array($result_lietke_gh)) {
        
        ?>
        <tr style="text-align: center;">
            <td>
                <?php echo $row['id_dh'] ?>
            </td>
            <td>
                <?php echo $row['madh'] ?>
            </td>
            <td>
                <?php echo $row['tongdh'] ?>0.000đ
            </td>
            <td>
                <?php echo $row['phuongthucthanhtoan'] ?>
            </td>
            <td>
                <?php echo $row['user'] ?>
            </td>
            <td>
                <?php echo $r['address'] ?>
            </td>
            <td>
                <?php echo $row['email'] ?>
            </td>
            <td>
            <?php if($row['duyetdh']==1){
                echo'<a href="modules/quanlydonhang/xuly.php?code='.$row['id_dh'].'"> Đơn hàng mới</a>';
            }else{
                echo'Đã giao hàng';
            }
            ?>
            </td>
            <td>
                0<?php echo $row['sdt'] ?>
            </td>
            <td>
                <a href="indexadmin.php?action=quanlydonhang&query=xemdonhang&code=<?php echo $row['id_dh'] ?>">Xem đơn
                    hàng</a>
            <!-- <th><a href="modules/quanlydonhang/xuly.php?iddonhang=
            <?php
            //  echo $row['id_dh'] 
             ?>
             ">Xóa</a></th> -->
            </td>
        </tr>

        <?php
    }

    ?>
</table>