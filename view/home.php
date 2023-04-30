    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row">
                <div class="banner mb">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/banner.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="images/banner2.jpg" style="width:100%">
                            <div class="text" style="color: orange">Caption Two</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="images/banner3.jpg" style="width:100%">
                            <div class="text">Caption Three</div>
                        </div>

                        <!-- <a class="prev" onclick="plusSlides(-1)">❮</a> -->
                        <!-- <a class="next" onclick="plusSlides(1)">❯</a> -->

                        </div>
                        <br>

                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span> 
                            <span class="dot" onclick="currentSlide(2)"></span> 
                            <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $i = 0;
                    foreach ($spNew as $sp) {
                        extract($sp);
                        $img = $img_path . $hinh;
                        $linksp = "index.php?act=sanphamct&idsp= ".$id;
                        if(($i == 2) || ($i == 5) || ($i == 8)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                        echo   '<div class="boxsp '.$mr.'">
                                    <div class="row img">
                                        <a href="'.$linksp.'">
                                            <img src="'.$img.'" alt="" width="150" height="150">
                                        </a>
                                    </div>
                                    <a href="'.$linksp.'" 
                                    style=" font-size: 12px;
                                    text-decoration: none;
                                    color: #333">
                                        <p style="margin-left: 12px; font-size: 20px;">'.$gia.'</p>
                                    </a>
                                    <a href="'.$linksp.'" 
                                    style="margin-left: 12px; 
                                    font-size: 12px;
                                    text-decoration: none;
                                    color: #333">'.$tensp.'</a>

                                    <div class="row btnAddToCart">
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="tensp" value="'.$tensp.'">
                                            <input type="hidden" name="img" value="'.$hinh.'">
                                            <input type="hidden" name="gia" value="'.$gia.'">
                                            <input type="submit" name="addToCartBtn" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>
                                </div>';
                        $i += 1;
                    }
                ?>
                <!-- 
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img">
                            <img src="images/1038.jpg" alt="" width="150" height="150">
                        </div>
                        <p>$50</p>
                        <a href="#">Điện thoại Xiaomi</a>
                    </div>
                -->
            </div>
        </div>
        <div class="boxphai">
            <?php
                include "boxright.php";
            ?>
        </div>
    </div>
</div>