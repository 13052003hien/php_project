<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN NGƯỜI DÙNG</h1>
    </div>
    <div class="row frmcontent">
        <table width="682" style="border-collapse: collapse; width: 100%;">
            <tr>
                <th width="70" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                <th width="194" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">MÃ TÀI KHOẢN</th>
                <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">USERNAME</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">PASSWORD</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">EMAIL</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">ĐỊA CHỈ</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">SỐ ĐT</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">VAI TRÒ</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
            </tr>

            <?php
                foreach ($listTk as $tk) {
                    extract($tk);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo ' <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td>
                                <a href = "'.$suatk.'"><input type="button" value="Sửa"></a>
                                <a href = "'.$xoatk.'"><input type="button" value="Xoá"></a>
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