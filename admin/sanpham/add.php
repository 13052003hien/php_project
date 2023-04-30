<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br>
                <select name="iddm">
                    <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            echo '<option value="'.$id.'">'.$tendm.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input class="name" type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá sản phẩm <br>
                <input class="name" type="text" name="gia">
            </div>
            <div class="row mb10">
                Hình sản phẩm <br>
                <input class="name" type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả sản phẩm <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="addSpBtn" value="Thêm mới">
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