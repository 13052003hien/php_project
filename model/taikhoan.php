<?php
    function add_taikhoan($email, $user, $pass) {
        $passHash = md5($pass);
        $sql = "insert into taikhoan(email, user, pass) values('$email', '$user', '$passHash')";
        pdo_execute($sql);
    }
    function check_user($user, $pass) {
        $sql = "select * from taikhoan where user = '" . $user . "' and pass = '" . $pass ."'";
        $tk = pdo_query_one($sql);
        return $tk;
    }
    function check_email($email) {
        $sql = "select * from taikhoan where email = '" . $email ."'";
        $tk = pdo_query_one($sql);
        return $tk;
    }
    function update_tk($id, $user, $pass, $email, $address, $tel) {
        $sql = "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id= " .$id;
        pdo_execute($sql);
    }
    function load_all_tk() {
        $sql = "select * from taikhoan order by id asc";
        $listTk = pdo_query($sql);
        return $listTk;
    }
?>