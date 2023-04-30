<?php
    if(is_array($dm)) {
        extract($dm);
    }
?>

<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại <br>
                <input class="id" type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input class="name" type="text" name="tenloai" 
                value="<?php if(isset($tendm) & ($tendm != "")) echo $tendm;?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($tendm) & ($id > 0)) echo $id;?>">
                <input type="submit" name="updateBtn" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>

            <?php
            if(isset($tb) && ($tb != "")) {
                echo $tb;
            }
            ?>
        </form>
    </div>
</div>