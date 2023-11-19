<?php

function insert_danhmuc($tenloai){
    $sql= "INSERT INTO danhmuc (name) VALUES ('$tenloai')";
    pdo_execute($sql);
}


function delete_danhmuc($id){
    $sql= "delete from danhmuc where id=".$id;
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql= "SELECT * FROM danhmuc order by id desc";

    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc; // trả về danh sách danh mục
}

function loadone_danhmuc($id){
    $sql= "SELECT * FROM danhmuc WHERE id=".$id;
    $dm= pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai){
    $sql= "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
?>