<div class="giohang">
    <div class="content-giohang">
        <div class="left-giohang">
            <h1>GIỎ HÀNG</h1>
            <?php
            //kiểm tra $_SESSION['giohang'] có tồn tại hay không
            if ((isset($_SESSION['giohang'])) && (count($_SESSION['giohang']) > 0)) {
                echo '<table class="table-giohang">
                    <tr>
                        <th>STT</th>
                        <th>Tên loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Hành động</th>
                    </tr>';
                $i = 0;
                $tong = 0;
                foreach ($_SESSION['giohang'] as $item) {
                    $thanhtien = $item[4] * $item[5];
                    $tong += $thanhtien;?>
                    <tr class="tr-churagiua">
                        <td><?php echo ($i + 1)?></td>
                        <td><?php echo $item[1] ?></td>
                        <td><?php echo $item[2] ?></td>
                        <td class="td-img"><img src="images/<?php echo $item[3]?>"></td>
                        <td><?php echo $item[4] ?>0.000đ</td>
                        <td>
                            <a style="text-decoration:none" href="index.php?url=tuychinhsl&tru=<?php echo $item[0] ?>">-</i></a>
                            <?php echo  $item[5] ?>
                            <a style="text-decoration:none" href="index.php?url=tuychinhsl&cong=<?php echo $item[0] ?>">+</a>
                        </td>
                        <td><?php echo $thanhtien ?>0.000đ</td>
                        <td><a href="index.php?url=xoagiohang&i=<?php echo $i ?>">Xóa</a></td>
                    </tr>
                   <?php $i++;
                }
                echo '<tr class="tonggiatridh"><td colspan="6">Tổng giá trị đơn hàng</td><td class="td-tong">' . $tong . '0.000đ</td><td></td></tr>';
                echo '</table>';
            } else {
                echo '<br>';
                echo 'Giỏ hàng đang rỗng.';
            }
            ?>
            <div>
                <a href="index.php">Tiếp tục mua hàng</a> | <a href="index.php?url=xoagiohang">Xóa giỏ hàng</a>
            </div>
        </div>
        <div class="right-giohang">
            <h1>THÔNG TIN GIAO HÀNG</h1>
            <form action="pages/thanhtoan.php" method="post">
                <div>
                    <?php
                    $id_arraysp = array();
                    foreach ($_SESSION['giohang'] as $item) {
                        $id_arraysp[$item[0]] = $item[5];
                    }
                    $_SESSION["danhsachsanpham"] = $id_arraysp;
                    ?>
                    <input class="thongtinmuahang" type="hidden" name="tongdh" value="<?= $tong ?>">
                    <div>
                    <?php
                         if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                            echo '<p>Tài khoản: ' . $_SESSION['user'] . '</p>';
                        }
                    ?>
                    </div>
                    <div>
                        <input class="thongtinmuahang" type="text" name="address" placeholder="Địa chỉ" required>
                    </div>
                    
                    <div>
                        <input class="thongtinmuahang" type="text" name="sdt" placeholder="Số điện thoại" required>
                    </div>
                    <div>
                        <label for="pttt">Phương thức thanh toán </label> <br>
                        <input type="radio" name="phuongthucthanhtoan" value="1"> Thanh toán khi nhận hàng
                    </div>
                </div>
                <?php
                if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
                    echo '<input type="submit" class="btn-thanhtoan" name="thanhtoan" value="ĐẶT HÀNG">';
                } else {
                    ?>
                    <p style="color:red;margin-top:5px;">Bạn cần đăng nhập để đặt hàng <a
                            style="color:blue;text-decoration: underline;" href="admin/pages/login.php">tại đây</a></p>
                    <?php
                }
                ?>

            </form>
        </div>
    </div>
</div>