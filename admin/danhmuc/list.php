<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="row frmcontent">
        <table width="682" style="border-collapse: collapse; width: 100%;">
            <tr>
                <th width="70" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                <th width="194" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">MÃ LOẠI</th>
                <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">TÊN LOẠI</th>
                <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
            </tr>

            <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo ' <tr>
                            <td>
                                <input type="checkbox" name="" id="">
                            </td>
                            <td>'.$id.'</td>
                            <td>'.$tendm.'</td>
                            <td>
                                <a href = "'.$suadm.'"><input type="button" value="Sửa"></a>
                                <a href = "'.$xoadm.'"><input type="button" value="Xoá"></a>
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