<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <table width="682" style="border-collapse: collapse; width: 100%;">
            <tr>
                <th width="70" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                <th width="194" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">ID</th>
                <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">NỘI DUNG</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">IDUSER</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">IDPRO</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">NGÀY BÌNH LUẬN</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
            </tr>

            <?php
                foreach ($listBl as $bl) {
                    extract($bl);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo ' <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td>
                                <a href = "'.$suabl.'"><input type="button" value="Sửa"></a>
                                <a href = "'.$xoabl.'"><input type="button" value="Xoá"></a>
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
        <a href="index.php?act=adddm">
            <input type="button" value="Nhập thêm">
        </a>
    </div>
</div>