    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
               <div class="boxtitle">Giỏ hàng</div>
               <div class="row boxcontent cart">
                   <table>

                        <?php
                            viewcart(1);
                        ?>

                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1001.jpg" alt="" height="80px"></td>
                            <td>Đồng hồ</td>
                            <td>50</td>
                            <td>2</td>
                            <td>100 VNĐ</td>
                            <td><input type="button" value="Xóa"></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><img src="images/1001.jpg" alt="" height="80px"></td>
                            <td>Đồng hồ</td>
                            <td>50</td>
                            <td>2</td>
                            <td>100 VNĐ</td>
                            <td><input type="button" value="Xóa"></td>
                        </tr> -->
                   </table>
               </div>
            </div>
            <div class="row mb bill">
                <a href="index.php?act=bill"><input type="submit" value="TIẾP TỤC ĐẶT HÀNG"></a><a href="index.php?act=delcart">XÓA GIỎ HÀNG</a>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
            include "view/boxright.php";
        ?>
    </div>
</div>