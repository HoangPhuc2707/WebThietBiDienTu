<!-- <ul class="admincp_list">
    <li><a href="indexadmin.php?action=quanlysanpham&query=them">
        <div>
            <img src="../images/icons8-product-30.png" alt="">
        </div>
        <div class="menu-content">Sản phẩm</div>
        </a>
    </li>
    <li><a href="indexadmin.php?action=quanlydanhmucsanpham&query=them">
        <div>
            <img src="../images/icons8-product-50.png" alt="">
        </div>
        <div class="menu-content">Danh mục sản phẩm</div>
        </a>
    </li>
    <li><a href="indexadmin.php?action=quanlynguoidung&query=them">
        <div>
            <img src="../images/icons8-account-50.png" alt="">
        </div>
        <div class="menu-content">Tài khoản</div>
        </a>
    </li>
    <li><a href="indexadmin.php?action=quanlydonhang&query=them">
        <div>
            <img src="../images/icons8-order-64.png" alt="">
        </div>
        <div class="menu-content">Đơn hàng</div>
        </a>
    </li>
</ul> -->
<!-- <ul class="admincp_list">
    <li><a href="indexadmin.php?action=quanlysanpham&query=them">
        <div>
            <img src="../images/icons8-product-30.png" alt="">
        </div>
        <div class="menu-content">Sản phẩm</div>
        </a>
    </li>
    <li><a href="indexadmin.php?action=quanlydanhmucsanpham&query=them">
        <div>
            <img src="../images/icons8-product-50.png" alt="">
        </div>
        <div class="menu-content">Danh mục sản phẩm</div>
        </a>
    </li>
    <li><a href="indexadmin.php?action=quanlynguoidung&query=them">
        <div>
            <img src="../images/icons8-account-50.png" alt="">
        </div>
        <div class="menu-content">Tài khoản</div>
        </a>
    </li>
    <li><a href="indexadmin.php?action=quanlydonhang&query=them">
        <div>
            <img src="../images/icons8-order-64.png" alt="">
        </div>
        <div class="menu-content">Đơn hàng</div>
        </a>
    </li>
</ul> -->
<div class ="adminmenu">
    <div class="menulist">
        <ul class="admincp_list">

            <li><a href="indexadmin.php?action=quanlysanpham&query=them">
                <div>
                    <img src="../images/icons8-product-30.png" alt="">
                </div>
                <div class="menu-content">Sản phẩm</div>
                </a>
            </li>
            <li><a href="indexadmin.php?action=quanlydanhmucsanpham&query=them">
                <div>
                    <img src="../images/icons8-product-50.png" alt="">
                </div>
                <div class="menu-content">Danh mục sản phẩm</div>
                </a>
            </li>
            <li><a href="indexadmin.php?action=quanlynguoidung&query=them">
                <div>
                    <img src="../images/icons8-account-50.png" alt="">
                </div>
                <div class="menu-content">Tài khoản</div>
                </a>
            </li>
            <li><a href="indexadmin.php?action=quanlydonhang&query=them">
                <div>
                    <img src="../images/icons8-order-64.png" alt="">
                </div>
                <div class="menu-content">Đơn hàng</div>
                </a>
            </li>
        </ul>
    </div>
</div>
<style>
        .adminmenu{
            min-height:430px;
            width: 18%;
            background-color:while;
            float: left;
            padding-left: 0;
            margin-left: 0;
        }
        .menulist {
            position: absolute;
            top: 55px;
            border: none;
            left:0;
            height: auto;
            width: 18%;
            background-color: while;
            margin-left:0;
            /* padding-left:2.5px; */
            float: left;
            color: #fff;
        /* transition: top 0.3s; */
        }
        /* ul.admincp_list li:hover{
            background-color: rgb(66, 67, 68);
        }
        ul.admincp_list li a{
            text-decoration: none;
            text-align: left;
            color: rgb(255, 255, 255);
            display: block;
        }
        ul.admincp_list li {
    
            margin: 7px;
            padding: 5px;
        } */
        .adminmenu.fixed{
            min-height:430px;
            width: 18%;
            background-color:while;
            float: left;
            padding-left: 0;
            margin-left: 0;
        }
       .menulist.fixed {    
            border: none;
            left:0;
            position: fixed;
            top: 28px;
            margin-left:0;
            padding-left:0;
            text-decoration: none;
            padding: 0;
            margin:0;
            transform: translateY(-10%);
        }
            /* ul.admincp_list li.fixed {
            margin: 7px;
            padding: 5px;
        } */
</style>

<script>
    window.addEventListener('scroll', function() {
        var sidebar = document.querySelector('.menulist');
        var sidebarHeight = sidebar.offsetHeight;
        var windowHeight = window.innerHeight;
        var scrollPosition = window.scrollY || window.pageYOffset;
        var scrollThreshold = windowHeight * 0.08;
        if (scrollPosition >= scrollThreshold) {
            sidebar.classList.add('fixed');
        } else {
            sidebar.classList.remove('fixed');
        }
    });
</script>

