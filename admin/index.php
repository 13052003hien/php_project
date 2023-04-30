<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "sanpham/header.php";
    // Controllers danhmuc 
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // Kiểm tra người dùng click vào nút add chưa?
                if(isset($_POST['addBtn']) && $_POST['addBtn']) {
                    $tenloai = $_POST['tenloai'];
                    add_dm($tenloai);
                    $tb = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $dsdm = load_all();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                    del_dm($_GET['id']);
                }
                $dsdm = load_all();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                    $dm = load_one($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                // Kiểm tra người dùng click vào nút cập nhật chưa?
                if(isset($_POST['updateBtn']) && $_POST['updateBtn']) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update($id, $tenloai);
                    $tb = "Cập nhật thành công";
                }
                $dsdm = load_all();
                include "danhmuc/list.php";
                break;

            // Controllers sanpham
            case 'addsp':
                // Kiểm tra người dùng click vào nút add chưa?
                if(isset($_POST['addSpBtn']) && $_POST['addSpBtn']) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $filename = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    add_sp($tensp, $giasp, $filename, $mota, $iddm);
                    $tb = "Thêm thành công";
                }
                $dsdm = load_all();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listOK']) && $_POST['listOK']) {
                    $kword = $_POST['kword'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kword = '';
                    $iddm = 0;
                }
                $dsdm = load_all();
                $listsp = load_all_sp($kword, $iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                    del_sp($_GET['id']);
                }
                $listsp = load_all_sp("", 0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                    $sp = load_one_sp($_GET['id']);
                }
                $dsdm = load_all();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                // Kiểm tra người dùng click vào nút cập nhật chưa?
                if(isset($_POST['updateSpBtn']) && $_POST['updateSpBtn']) {
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['gia'];
                    $hinh = $_FILES['hinh']['name'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_sp($id, $tensp, $giasp, $hinh, $mota, $iddm);
                    $tb = "Cập nhật thành công";
                }
                $dsdm = load_all();
                $listsp = load_all_sp("", 0);
                include "sanpham/list.php";
                break;
            case 'dskh':
                $listTk = load_all_tk();
                include "taikhoan/listTk.php";
                break;
            case 'dsbl':
                $listBl = load_all_bl(0);
                include "binhluan/list_bl.php";
                break;
            case 'xoabl':
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                    del_bl($_GET['id']);
                }
                $listBl = load_all();
                include "binhluan/list_bl.php";
                break;
            case 'listbill':
                if(isset($_POST['kw']) && ($_POST['kw'] != "")) {
                    $kw = $_POST['kw'];
                } else {
                    $kw = "";
                }
                $listbill = loadall_bill($kw, 0);
                include "bill/listbill.php";
                break;
            case 'thongke':
                $listtke = loadall_tke();
                include "thongke/list.php";
                break;
            default:
                include "sanpham/home.php";
                break;
        }
    } else {
        include "sanpham/home.php";
    }

    include "sanpham/footer.php";
?>