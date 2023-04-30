<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Mã loại <br>
                <input class="id" type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input class="name" type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="addBtn" value="Thêm mới">
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