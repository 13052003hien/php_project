<?php
    function add_sp($tensp, $giasp, $filename, $mota, $iddm) {
        $sql = "insert into sanpham(tensp, gia, hinh, mota, iddm) values('$tensp', '$giasp', '$filename', '$mota', '$iddm')";
        pdo_execute($sql);
    }
    function del_sp($id) {
        $sql = "delete from sanpham where id = " . $id;
        pdo_execute($sql);
    }
    function load_all_sp($kword = "", $iddm = 0) {
        $sql = "select * from sanpham where 1";
        if($kword != "") {
            $sql .= " and tensp like '%".$kword."%'";
        }
        if($iddm > 0) {
            $sql .= " and iddm = '".$iddm."'";
        }
        $sql .= " order by id asc";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function load_all_sp_home() {
        $sql = "select * from sanpham where 1 order by id desc limit 0,11";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function load_all_sp_top10() {
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function load_one_sp($id) {
        $sql = "select * from sanpham where id = " . $id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_tendm($iddm) {
        if($iddm > 0) {
            $sql = "select * from danhmuc where id = " . $iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $tendm;
        } else {
            return "";
        }
    }
    function load_sp_cungloai($id, $iddm) {
        $sql = "select * from sanpham where iddm = ".$iddm." and id <> " . $id;
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function update_sp($id, $tensp, $giasp, $hinh, $mota, $iddm) {
        if($hinh !== "") {
            $sql = "update sanpham set tensp='".$tensp."', gia='".$giasp."', hinh='".$hinh."', mota='".$mota."', iddm='".$iddm."' where id= ".$id;
        } else {
            $sql = "update sanpham set tensp='".$tensp."', gia='".$giasp."', mota='".$mota."', iddm='".$iddm."' where id= " .$id;
        }
        pdo_execute($sql); 
    }
?>