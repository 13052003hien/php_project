<?php
    if(is_array($sp)) {
        extract($sp);
    }
    $hinh_path = "../upload/" . $hinh;
    if(is_file($hinh_path)) {
        $hinh = "<img src='".$hinh_path."' height='80'>";
    } else {
        $hinh = "No photos";
    }
?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                <option value="<?=$iddm?>" selected>Tất cả</option>
                <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        if($iddm == $id) {
                            echo '<option value="'.$id.'" selected>'.$tendm.'</option>';
                        }
                        else {
                            echo '<option value="'.$id.'">'.$tendm.'</option>';
                        }
                    }
                ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input class="name" type="text" name="tensp" value="<?= $tensp ?>">
            </div>
            <div class="row mb10">
                Giá sản phẩm <br>
                <input class="name" type="text" name="gia" value="<?= $gia ?>">
            </div>
            <div class="row mb10">
                Hình sản phẩm <br>
                <input class="name" type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả sản phẩm <br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="updateSpBtn" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH SẢN PHẨM"></a>
            </div>

            <?php
            if(isset($tb) && ($tb != "")) {
                echo $tb;
            }
            ?>
        </form>
    </div>
</div>