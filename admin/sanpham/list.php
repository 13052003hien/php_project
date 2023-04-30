<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kword">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        echo '<option value="'.$id.'">'.$tendm.'</option>';
                    }
                ?>
            </select>
            <input type="submit" name="listOK" value="GO">
        </form>
        <table width="800" style="border-collapse: collapse; width: 100%;">
            <tr>
                <th width="70" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                <th width="194" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">MÃ SẢN PHẨM</th>
                <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">GIÁ SẢN PHẨM</th>
                <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">HÌNH SẢN PHẨM</th>
                <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">MÔ TẢ SẢN PHẨM</th>
                <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">LƯỢT XEM</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
            </tr>

            <?php
                foreach ($listsp as $sp) {
                    extract($sp);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinh_path = "../upload/" . $hinh;
                    if(is_file($hinh_path)) {
                        $hinh = "<img src='".$hinh_path."' height='80'>";
                    } else {
                        $hinh = "No photos";
                    }
                    echo ' <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>'.$id.'</td>
                            <td>'.$tensp.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$mota.'</td>
                            <td>'.$luotxem.'</td>
                            <td>
                                <a href = "'.$suasp.'"><input type="button" value="Sửa"></a>
                                <a href = "'.$xoasp.'"><input type="button" value="Xoá"></a>
                            </td>
                        </tr>';
                }
            ?>
        </table>
  </div>

    <div class="row mb10">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp">
            <input type="button" value="Nhập thêm">
        </a>
    </div>
</div>