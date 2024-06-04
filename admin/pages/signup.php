<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/signup.css">
   <link rel="shortcut icon" href="../../logo/logomini.png">
   <title>Đăng ký</title>
</head>

<body>
   <div class="wrapper-sg">
      <div class="form-container">
         <form action="checksignup.php" class="form-main" method="post">
            <div class="img-logout"><a href="../../index.php"><img src="../images/logout.png" alt=""></a></div>
            <h1 class="form-heading">ĐĂNG KÝ</h1>
            <div class="form-content">
            <div class="form-input">
                  <p><label for="#!">Tên người dùng</label>*</p>
                  <input type="text" name="user" placeholder="Tên người dùng" required>
               </div>
               <div class="form-input">
                  <p><label for="#!">Tài khoản</label>*</p>
                  <input type="email" name="email" placeholder="Email" required>
               </div>
               <div class="form-input">
                  <p><label for="#!">Mật khẩu</label>*</p>
                  <input type="password" name="pass" placeholder="Mật khẩu" required>
               </div>
               <div class="form-input">
                  <p><label for="#!">Nhập lại mật khẩu</label>*</p>
                  <input type="password" name="repass" placeholder="Nhập lại mật khẩu" required>
               </div>
               <div class="form-input">
                  <p><label for="#!">Điện thoại</label>*</p>
                  <input type="text" name="sdt" placeholder="Số điện thoại" required>
               </div>
               <div class="form-input">
                  <p><label for="#!">Địa chỉ</label>*</p>
                  <input type="text" name="diachi" placeholder="Địa chỉ" required>
               </div>
            </div>
            <input type="submit" class="form-button" name="dangky" value="Đăng ký">
         </form>
      </div>
   </div>
</body>

</html>