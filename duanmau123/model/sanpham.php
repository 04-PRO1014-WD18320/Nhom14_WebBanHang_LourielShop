<?php

function insert_sanpham($name, $giasp ,$hinh, $mota,$iddm){
    $sql= "INSERT INTO sanpham (name ,price, img , mota, iddm) VALUES ('$name','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}


function delete_sanpham($id){
    $sql= "delete from sanpham where id=".$id;
    pdo_execute($sql);
}

function loadall_sanpham($kyw="",$iddm=0){
    $sql= "SELECT * FROM sanpham where trangthai=0";
        if($kyw !=""){
            $sql .=" and name like '%".$kyw."%'";
        }
        if($iddm >0){
            $sql .=" and iddm ='".$iddm."'";
        }
    $sql.=" order by id desc";

    $listsanpham= pdo_query($sql);
    return  $listsanpham; // trả về danh sách danh mục
}

function loadone_sanpham($id){
    $sql= "SELECT * FROM sanpham WHERE id=".$id;
    $dm= pdo_query_one($sql);
    return $dm;
}

function loadone_sanpham_luotxem($id){
    $sql= "UPDATE sanpham SET luotxem= luotxem + 1 WHERE id=".$id;
    pdo_execute($sql);
}

function update_sanpham($id,$iddm, $tensp, $giasp, $mota, $filename){
    if($filename!=""){
        $sql= "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$filename."' WHERE id=".$id;
    }
    else{
        $sql= "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' WHERE id=".$id;
    }
  
    pdo_execute($sql);
}

function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
// câu truy vấn xóa mền

function xoamen_sanpham($id){
    $sql= "UPDATE sanpham SET trangthai=1  WHERE id=".$id;
    pdo_execute($sql);
}

?>

