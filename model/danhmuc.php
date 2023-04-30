<?php
    function add_dm($tenloai) {
        $sql = "insert into danhmuc(tendm) values('$tenloai')";
        pdo_execute($sql);
    }
    function del_dm($id) {
        $sql = "delete from danhmuc where id = " . $id;
        pdo_execute($sql);
    }
    function load_all() {
        $sql = "select * from danhmuc order by id asc";
        $dsdm = pdo_query($sql);
        return $dsdm;
    }
    function load_all_home() {
        $sql = "select * from danhmuc order by id asc";
        $dsdm = pdo_query($sql);
        return $dsdm;
    }
    function load_one($id) {
        $sql = "select * from danhmuc where id = " . $id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update($id, $tenloai) {
        $sql = "update danhmuc set tendm='".$tenloai."' where id= " .$id;
        pdo_execute($sql);
        
    }
?>