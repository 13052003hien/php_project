<?php
    session_start();
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/danhmuc.php";
    include "model/cart.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = [];
    }

    $spNew = load_all_sp_home();
    $dmNew = load_all_home();
    $dsdm = load_all();
    $dst10 = load_all_sp_top10();

    if((isset($_GET['act'])) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if((isset($_POST['searchBox'])) && ($_POST['searchBox'] != "")) {
                    $kw = $_POST['searchBox'];
                } else {
                    $kw = "";
                }
                if((isset($_GET['iddm'])) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }
                $dssp = load_all_sp($kw, $iddm);
                $tendm = load_tendm($iddm);
                include "view/sanpham.php"; 
                break;
            case 'sanphamct':
                if((isset($_GET['idsp'])) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = load_one_sp($id);
                    extract($onesp);
                    $sp_cungloai = load_sp_cungloai($id, $iddm);
                    include "view/sanphamct.php"; 
                } else {
                    include "view/home.php";
                }
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'dangky':
                if((isset($_POST['registerBtn'])) && ($_POST['registerBtn'])) {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    add_taikhoan($email, $user, $pass);
                    $tb = "Đăng ký thành công";
                }
                include "view/register/dangky.php";
                break;
            case 'dangnhap':
                if((isset($_POST['loginBtn'])) && ($_POST['loginBtn'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pwd'];
                    $check_tk = check_user($user, $pass);
                    if(is_array($check_tk)) {
                        $_SESSION['user'] = $check_tk;
                        $tb = "Đăng nhập thành công";
                        header('Location: index.php');
                    } else {
                        $tb = "Tài khoan ko tồn tại, vui lòng kiểm tra lại!!!";
                    }
                }
                include "view/register/dangky.php";
                break;
            case 'edit_tk':
                if((isset($_POST['editBtn'])) && ($_POST['editBtn'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['addr'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_tk($id, $user, $pass, $email, $address, $tel);
                    $_SESSION['user'] = check_user($user, $pass);
                    header('Location: index.php?act=edit_tk');
                }
                include "view/register/edit_tk.php";
                break;
            case 'quenmk':
                if((isset($_POST['sendBtn'])) && ($_POST['sendBtn'])) {
                    $email = $_POST['email'];
                    $check_email = check_email($email);
                    if(is_array($check_email)) {
                        $tb = "Mật khẩu của bạn: " . $check_email['pass'];
                    } else {
                        $tb = "Email ko tồn tại";
                    }
                }
                include "view/register/quenmk.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'logout':
                session_destroy();
                header('Location: index.php');
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'addtocart':
                if((isset($_POST['addToCartBtn'])) && ($_POST['addToCartBtn'])) {
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $img = $_POST['img'];
                    $gia = $_POST['gia'];
                    $solg = 1;
                    $total = $gia * $solg;
                    $spadd = [$id, $tensp, $img, $gia, $solg, $total];
                    array_push($_SESSION['mycart'], $spadd);
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])) {
                    array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                } else {
                    $_SESSION['mycart'] = [];
                }
                header("Location: index.php?act=viewcart");
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'billconfirm':
                if((isset($_POST['acceptBtn'])) && ($_POST['acceptBtn'])) {
                    if(isset($_SESSION['user'])) {
                        $iduser = $_SESSION['user']['id'];
                    } else {
                        $id = 0;
                    }
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $pttt = $_POST['pttt'];
                    $ngaydh = date('h:i:sa d/m/Y');
                    $tongdh = totalcart();
                    // Tạo bill
                    $idbill = add_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydh, $tongdh);
                    foreach ($_SESSION['mycart'] as $cart) {
                        // Thêm sp vào cart
                        insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], 
                        $cart[4], $cart[5], $idbill);
                    }
                    // Xóa cart
                    $_SESSION['cart'] = [];
                }
                $bill = load_one_bill($idbill);
                $billct = loadall_cart($idbill);
                include "view/cart/billconfirm.php";
                break;
            case 'mybill':
                $listbill = loadall_bill($_SESSION['user']['id']);
                include "view/cart/mybill.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";
?>