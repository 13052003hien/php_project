    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">QUÊN MẬT KHẨU</div>
                <div class="row boxcontent formtaikhoan">
                    <form action="index.php?act=quenmk" method="post">
                        <div class="row mb10">
                            Email
                            <input type="email" name="email">
                        </div>
                        <input type="submit" value="Gửi" name="sendBtn">
                        <input type="reset" value="Nhập lại">
                    </form>
                    <h2 class="tb">
                        <?php
                            if((isset($tb)) && ($tb != "")) {
                                echo $tb;
                            }
                        ?>  
                    </h2>
                </div>
            </div>
        </div>
        <div class="boxphai">
            <?php
                include "view/boxright.php";
            ?>
        </div>
    </div>
</div>