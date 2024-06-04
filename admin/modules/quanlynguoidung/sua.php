<?php
$sql_nguoidung = "SELECT * FROM user WHERE id_user='$_GET[idnguoidung]' LIMIT 1";
$querynd = mysqli_query($conn, $sql_nguoidung);

?>
<p style="font-size:24px;font-weight:bold;color:black;padding-left:40px;">Sửa thông tin tài khoản</p>

<form action="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $_GET['idnguoidung'] ?>" method="POST"
	enctype="multipart/form-data">
	<table border="1" width="50%" style="border-collapse: collapse;">
		<?php

		while ($nguoidung = mysqli_fetch_array($querynd)) {

			?>
			<tr style="text-align: center;background-color: gray;color:white;">
                <th colspan="2">Điền tài khoản</th>
            </tr>
			<tr>
				<td>ID</td>
				<td><input type="text" size="50" name="id_user" value="<?php echo $nguoidung['id_user'] ?>"></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" size="50" name="address" value="<?php echo $nguoidung['address'] ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" size="50" name="email" value="<?php echo $nguoidung['email'] ?>"></td>
			</tr>
			<tr>
				<td>Tên tài khoản</td>
				<td><input type="text" size="50" name="user" value="<?php echo $nguoidung['user'] ?>"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" size="50" name="sdt" value="<?php echo $nguoidung['sdt'] ?>"> </td>
			</tr>
			<tr>
				<td>Chức Vụ </td>
				<td>
					<select name="role">
						<?php
						if ($nguoidung['role'] == 1) {
							?>
							<option value="1" selected>Quản lý</option>
							<option value="0">Khách hàng</option>

							<?php
						} else {
							?>
							<option value="1">Quản lý</option>
							<option value="0" selected>Khách hàng</option>
							<?php

						}

						?>
					</select>
				</td>
			</tr>
			<tr>

				<td colspan="2" ><input type="submit" name="suanguoidung" value="Sửa tài khoản"></td>

			</tr>
			
		</table>

	</form>
	<?php
		}

		?>