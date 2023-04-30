    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <?php extract($onesp); ?>
                <div class="boxtitle"><?php $tensp; ?></div>
                <div class="row boxcontent">
                    <?php
                        $img = $img_path . $hinh;
                        echo '<div class="row mb" style="text-align: center;"><img src="'.$img.'"></div> <br/>';
                        echo $mota;
                    ?>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#bl").load("view/comment/commentsForm.php", {idpro: <?= $id; ?>});
                });
            </script>

            <div class="row" id="bl">

            </div>

            <div class="row">
                <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                <div class="row boxcontent">
                    <?php
                        foreach ($sp_cungloai as $spcl) {
                            extract($spcl);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            echo '<li><a href="'.$linksp.'">'.$tensp.'</a></li>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="boxphai">
            <?php
                include "boxright.php";
            ?>
        </div>
    </div>
</div>