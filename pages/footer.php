<div class="main-footer">
    <div class="top-footer"></div>
    <div class="content-footer">
        <div class="left-footer">
            <div class="left-img-footer">
                <img src="images/logo1.png" alt="">
            </div>
            <div class="share">
                <a id="fb" href="https://www.facebook.com/profile.php?id=100006271817422"><i
                        class="fa fa-facebook-f"></i></a>
                <a id="tw" href=""><i class="fa fa-twitter"></i></a>
                <a id="ins" href=""><i class="fa fa-instagram"></i></a>
                <a id="ptr" href=""><i class="fa fa-pinterest"></i></a>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.638429576286!2d105.76524067336717!3d10.046665472233421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0880f08006ffb%3A0x9a745510330faf4e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBL4bu5IHRodeG6rXQgLSBDw7RuZyBuZ2jhu4cgQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1681897886206!5m2!1svi!2s"
                width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="between-footer">
            <h3>Tìm kiếm nhanh</h3>
            <ul class="timkiemnhanh">
                <?php
                $sql = "SELECT*FROM loai";
                $kq = mysqli_query($conn, $sql);
                while ($d = mysqli_fetch_array($kq)) {
                    ?>
                    <li><a href="index.php?url=theloai&id_loai=<?php echo $d['id_loai']; ?>">
                            <?php echo $d['ten']; ?>
                        </a></li>
                <?php } ?>
                
            </ul>
        </div>
        <div class="right-footer">
            <h3>Liên hệ với chúng tôi</h3>
            <p>Địa chỉ: 256 Đ. Nguyễn Văn Cừ, An Hoà, Ninh Kiều, Cần Thơ</p>
            <p>Email: thphuc2100139@student.ctuet.edu.vn</p>
            <p>Điện thoại: 09 86 86 86 86</p>
            <div class="thank-footer">Thank You !</div>
        </div>
    </div>
    <div class="bottom-footer">
        
        <div class="create-to">&copy; Created by Qui&Quang&Phuc</div>
    </div>
</div>