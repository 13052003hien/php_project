    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">Phương thức thanh toán</div>
                <div class="row boxcontent">
                   <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Số lượng mặt hàng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                        </tr>
                        <?php
                            if(is_array($listbill)) {
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $ttdh = get_ttdh($bill['bill_status']);
                                    $slsp = loadall_cart_count($bill['id']);
                                    echo '<tr>
                                        <td>IAP-'.$bill['id'].'</td>
                                        <td>'.$bill['ngaydh'].'</td>
                                        <td>'.$slsp.'</td>
                                        <td>'.$bill['total'].'</td>
                                        <td>'.$ttdh.'</td>
                                    </tr>';
                                }
                            }
                        ?>
                   </table>
               </div>
                </div>
        </div>
        <div class="boxphai">
            <?php
                include "view/boxright.php";
            ?>
        </div>
    </div>
</div>