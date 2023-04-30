<div class="row">
    <div class="row frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table width="800" style="border-collapse: collapse; width: 100%;">
                <tr>
                    <th width="70" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                    <th width="194" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">MÃ ĐƠN HÀNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">TÊN ĐƠN HÀNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">SỐ LƯỢNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">GIÁ CAO NHẤT</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">GIÁ THẤP NHẤT</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">GIÁ TRUNG BÌNH</th>
                    <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                </tr>
    
                <?php
                    foreach ($listtke as $tke) {
                        extract($tke);
                        echo ' <tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendmuc.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
  </div>

    <div class="row mb10">
        <a href="index.php?act=bieudo">
            <input type="button" value="Xem biểu đồ">
        </a>
    </div>
</div>