    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">SẢN PHẨM <strong style="text-transform: uppercase;"><?= $tendm; ?></strong></div>
                <div class="row boxcontent">
                    <?php
                        $i = 0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $img = $img_path . $hinh;
                        $linksp = "index.php?act=sanphamct&idsp= ".$id;
                        if(($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
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
                                </div>';
                        $i += 1;
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