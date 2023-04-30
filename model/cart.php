<?php
    function viewcart($del) {
        global $img_path;
        $sum = 0;
        $i = 0;
        if($del == 1) {
            $xoasp_th = '<th>Thao tác</th>';
        } else {
            $xoasp_th = '';
        }
        echo ' <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    '.$xoasp_th.'
                </tr>';
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh = $img_path . $cart[2];
            $total = $cart[3] * $cart[4];
            $sum += $total;
            if($del == 1) {
                $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
            } else {
                $xoasp_td = '';
            }
            echo '  <tr>
                        <td><img src="'.$hinh.'" alt="" height="80px"></td>
                        <td>'.$cart[1].'</td>
                        <td>'.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>'.$total.'</td>
                        '.$xoasp_td.'
                    </tr>';
            $i += 1;
        }
        echo    '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td colspan="3">'.$sum.'</td>
                </tr>';
    }
    function totalcart() {
        $sum = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $total = $cart[3] * $cart[4];
            $sum += $total;
        }
        return $sum; 
    }
    function add_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydh, $tongdh) {
        $sql = "insert into bill(iduser, bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydh, total) 
        values('$iduser', '$name', '$email', '$address', '$tel', '$pttt', '$ngaydh', '$tongdh')";
        return pdo_execute_lastInsertID($sql);
    }
    function insert_cart($iduser, $idpro, $img, $name, $gia, $soluong, $thanhtien, $idbill) {
        $sql = "insert into cart(iduser, idpro, img, name, gia, soluong, thanhtien, idbill) 
        values('$iduser', '$idpro', '$img', '$name', '$gia', '$soluong', '$thanhtien', '$idbill')";
        return pdo_execute($sql);
    }
    function load_one_bill($id) {
        $sql = "select * from bill where id = " . $id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    function loadall_cart($idbill) {
        $sql = "select * from cart where idbill = " . $idbill;
        $bill = pdo_query($sql);
        return $bill;
    }
    function loadall_bill($kw = "", $iduser = 0) {
        $sql = "select * from bill where 1"; 
        if($iduser = "") {
            $sql .= " AND iduser = " . $iduser;
        }
        if($kw > 0) {
            $sql .= " AND id like '%". $kw . "%'";
        }
        $sql .= " order by id desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function show_ct_bill($listbill) {
        global $img_path;
        $sum = 0;
        $i = 0;
        echo ' <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>';
        foreach ($listbill as $cart) {
            $hinh = $img_path . $cart['img'];
            $sum += $cart['thanhtien'];
            echo '  <tr>
                        <td><img src="'.$hinh.'" alt="" height="80px"></td>
                        <td>'.$cart['name'].'</td>
                        <td>'.$cart['gia'].'</td>
                        <td>'.$cart['soluong'].'</td>
                        <td>'.$cart['thanhtien'].'</td>
                    </tr>';
            $i += 1;
        }
        echo    '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td colspan="3">'.$sum.'</td>
                </tr>';
    }
    function get_ttdh($n) {
        switch ($n) {
            case '0':
                $tt = "Đơn hàng mới";
                break;
            case '1':
               $tt = "Đơn hàng đang xử lý";
               break;
            case '2':
               $tt = "Đơn hàng đang giao";
               break;
            case '3':
               $tt = "Đơn hàng đã giao";
               break;
            default:
                # code...
                break;
        }
        return $tt;
    }
    function loadall_cart_count($idbill) {
        $sql = "select * from cart where idbill = " . $idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }
    function loadall_tke() {
        $sql = "select danhmuc.id as madm, danhmuc.tendm as tendmuc, count(sanpham.id) as countsp, 
        min(sanpham.gia) as minprice, max(sanpham.gia) as maxprice, avg(sanpham.gia) as avgprice";
        $sql .= " from sanpham left join danhmuc on danhmuc.id = sanpham.iddm"; 
        $sql .= " group by danhmuc.id order by danhmuc.id desc";
        $listtke = pdo_query($sql);
        return $listtke;
    }
?>