<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    
    <form action="index.php?act=listbill" method="post">
            <input type="text" name="kw" placeholder="Nhập mã đơn hàng...">
            <input type="submit" name="listOK" value="GO">
        </form>

    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table width="800" style="border-collapse: collapse; width: 100%;">
                <tr>
                    <th width="70" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                    <th width="194" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">MÃ ĐƠN HÀNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">KHÁCH HÀNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">SỐ LƯỢNG HÀNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">GIÁ TRỊ ĐƠN HÀNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th width="296" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;">THAO TÁC</th>
                    <th width="102" style="background-color: #ccc; border: 1px solid #ddd; padding: 8px;"></th>
                </tr>
                <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh = $bill["bill_name"].'
                        <br> '.$bill["bill_email"].'
                        <br> '.$bill["bill_address"].';
                        <br> '.$bill["bill_tel"].'';
                        $countsp = loadall_cart_count($bill["id"]);
                        $ttdh = get_ttdh($bill["bill_status"]);
                        echo '<tr>
                                <td>
                                    <input type="checkbox" name="" id="">
                                </td>
                                <td>IAP-'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$countsp.'</td>
                                <td>
                                    <input type="button" value="Sửa">
                                    <input type="button" value="Xoá">
                                </td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
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