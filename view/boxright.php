            <div class="row mb">
                <div class="boxtitle">TÀI KHOẢN</div>
                <div class="boxcontent formtaikhoan">
                    <?php
                        if(isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                    ?>

                    <div class="row mb10">
                        Xin chào <?= $user; ?>
                    </div>

                    <div class="row mb10">
                        <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></li>
                        <?php if($role == 1) { ?>
                        <li><a href="admin/index.php">Đăng nhập admin</a></li>
                        <?php }?>
                        <li><a href="index.php?act=logout">Đăng xuất</a></li>
                    </div>

                    <?php
                        } else {
                    ?>
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row mb10">
                            Tên đăng nhập <br>
                            <input type="text" name="user">
                        </div>
                        <div class="row mb10">
                            Mật khẩu <br>
                            <input type="password" name="pwd">
                        </div>
                        <div class="row mb10">
                            <input type="checkbox" name="rememberPwd">
                            Ghi nhớ tài khoản?
                        </div>
                        <div class="row mb10">
                            <input type="submit" name="loginBtn" value="Đăng nhập">
                        </div>
                    </form> 
                    <li><a href="#">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb">
                <div class="boxtitle">DANH MỤC</div>
                <div class="boxcontent2 menudoc">
                    <ul>
                        <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm= ".$id;
                                echo '<li><a href="'.$linkdm.'">'.$tendm.'</a></li>';
                            }
                        ?>
                        <!-- <li><a href="#">Iphone</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Máy lạnh</a></li>
                        <li><a href="#">Máy giặt</a></li>
                        <li><a href="#">Iphone</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Máy lạnh</a></li>
                        <li><a href="#">Máy giặt</a></li> -->
                    </ul>
                </div>
                <div class="boxfooter searchbox">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="searchBox">
                        <input type="submit" name="searchBtn" value="Search">
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="boxtitle">TOP 10 YÊU THÍCH</div>

                <div class="row boxcontent">
                    <?php
                        foreach ($dst10 as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp".$id;
                            $img = $img_path . $hinh;
                            echo '<div class="row mb10 top10">
                                        <img src="'.$img.'" alt="">
                                        <a href="'.$linksp.'">'.$tensp.'</a>
                                    </div>'; 
                        }
                    ?>
                    <!-- <div class="row mb10 top10">
                        <img src="images/1001.jpg" alt="">
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="images/1001.jpg" alt="">
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="images/1001.jpg" alt="">
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="images/1001.jpg" alt="">
                        <a href="#">Điện thoại Xiaomi</a>
                    </div> -->
                </div>
            </div>