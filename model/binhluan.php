<?php
    function add_bl($noidung, $iduser, $idpro, $ngaybinhluan) {
        $sql = "insert into binhluan(noidung, iduser, idpro, ngaybinhluan) values('$noidung', '$iduser', 
        '$idpro', '$ngaybinhluan')";
        pdo_execute($sql);
    }
    function load_all_bl($idpro) {
        $sql = "select * from binhluan where 1";
        if($idpro > 0) {
            $sql .= " AND idpro='".$idpro."'"; 
        }
        $sql .= " order by id desc";
        $dsbl = pdo_query($sql);
        return $dsbl;
    }
    function del_bl($id) {
        $sql = "delete from binhluan where id = " . $id;
        pdo_execute($sql);
    }
?>